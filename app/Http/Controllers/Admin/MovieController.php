<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all(); // Lấy tất cả các bản ghi từ bảng tbphim

    return view('admin.movies.index', compact('movies'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.movies.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Lấy file ảnh từ request
        $hinhanh = $request->file('hinhanh');
        $input = $request->all();

        // Tạo tên ngẫu nhiên cho file ảnh
        $tenFile = uniqid() . '.' . $hinhanh->getClientOriginalExtension();
        $quocgia = $input['quocgia'][0]; // Giả sử quốc gia chỉ chọn 1
        $theloai = implode(',', $input['theloai']); // Chuyển mảng thành chuỗi
        // Sao chép file ảnh vào thư mục storage/app/public
        $hinhanh->storeAs('public', $tenFile);

$phim = new Movie(); // Thay Phim bằng tên của model phù hợp
$phim->hinhanh = $tenFile;
$phim->atenphim = $input['atenphim'];
$phim->nsx = $input['nsx'];
$phim->thoiluong = $input['thoiluong'];
$phim->quocgia = $quocgia;
$phim->theloai = $theloai;
$phim->daodien = $input['daodien'];
$phim->dienvien = $input['dienvien'];
$phim->ngaykhoichieu = $input['ngaykhoichieu']; // Thêm dòng này
$phim->trailer = $input['trailer']; // Thêm dòng này
$phim->noidung = $input['noidung']; // Thêm dòng này
$phim->giave = $input['giave']; // Thêm dòng này



        // Gán các giá trị khác từ request vào model

        $phim->save();
       return  redirect()->route('admin.movies.index');
        // Redirect hoặc thực hiện hành động tiếp theo
        // return redirect()->route('ten_route');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the movie by its ID
        $movie = Movie::where('id_phim', $id)->firstOrFail();

        // Pass the movie data to the view
        return view('admin.movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Lấy thông tin phim cần cập nhật từ cơ sở dữ liệu
        $movie = Movie::where('id_phim', $id)->first();

        if ($movie) {
            // Cập nhật thông tin phim
            $movie->atenphim = $request->atenphim;
            $movie->nsx = $request->nsx;
            $movie->thoiluong = $request->thoiluong;
            $movie->daodien = $request->daodien;
            $movie->dienvien = $request->dienvien;
            $movie->quocgia = implode(',', $request->quocgia);
            $movie->theloai = implode(',', $request->theloai);
            $movie->ngaykhoichieu = $request->ngaykhoichieu;
            $movie->trailer = $request->trailer;
            $movie->noidung = $request->noidung;
            $movie->giave = $request->giave;

            // Kiểm tra nếu có file ảnh được gửi lên
            if ($request->hasFile('hinhanh')) {
                // Xử lý lưu ảnh vào storage và cập nhật tên ảnh trong cơ sở dữ liệu
                // Lưu ý: Bạn cần import các class và sử dụng các hàm của Laravel để xử lý tải lên ảnh
                $hinhanh = $request->file('hinhanh');
                $tenFile = uniqid() . '.' . $hinhanh->getClientOriginalExtension();
                $hinhanh->storeAs('public', $tenFile);
                $movie->hinhanh = $tenFile;
            }

            // Lưu các thay đổi vào cơ sở dữ liệu
            $movie->save();

            // Redirect hoặc thực hiện hành động tiếp theo
            return redirect()->route('admin.movies.index');
        } else {
            // Xử lý khi không tìm thấy phim
            return redirect()->route('admin.movies.index')->with('error', 'Không tìm thấy phim cần cập nhật.');
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Tìm bản ghi phim có khóa chính là $id
        $movie = Movie::where('id_phim', $id)->first();

        // Kiểm tra xem bản ghi có tồn tại hay không
        if ($movie) {
            // Nếu tồn tại, xóa bản ghi
            $movie->delete();
            return redirect()->route('admin.movies.index')->with('success', 'Movie deleted successfully');
        } else {
            // Nếu không tồn tại, hiển thị thông báo hoặc thực hiện hành động phù hợp với ứng dụng của bạn
            return redirect()->route('admin.movies.index')->with('error', 'Movie not found');
        }
    }

}
