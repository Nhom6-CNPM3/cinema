<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Truy vấn danh sách các bài viết từ cơ sở dữ liệu
        $blogs = Blog::all(); 

        // Trả về view 'index' và truyền biến 'blogs' chứa danh sách bài viết
        return view('admin.blogs.index', compact('blogs'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }



    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'tieude' => 'required|max:255',
            'noidung' => 'required',
            'hinhanh' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        // Process the image upload
        $tenFile = uniqid() . '.' .   $request->hinhanh->getClientOriginalExtension();
        $request->hinhanh->storeAs('public', $tenFile);
        
        $blog = new Blog();
        $blog->tieude = $validatedData['tieude'];
        $blog->noidung = $validatedData['noidung'];
        $blog->hinhanh = $tenFile; 

        // Save the blog record to the database
        $blog->save();

        
        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Tìm bài viết trong cơ sở dữ liệu dựa trên ID
        $blog = Blog::findOrFail($id);

        // Trả về view 'edit' và truyền biến 'blog' chứa thông tin của bài viết
        return view('admin.blogs.edit', compact('blog'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        // Kiểm tra và xác thực dữ liệu được gửi từ biểu mẫu
        $validatedData = $request->validate([
            // Định nghĩa các quy tắc xác thực cho các trường trong biểu mẫu
            'tieude' => 'required|max:255',
            'noidung' => 'required',
            'hinhanh' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        // Cập nhật thông tin của bài viết
        $blog->tieude = $request->tieude;
        $blog->noidung = $request->noidung;

        // Xử lý tải ảnh lên nếu có
        if ($request->hasFile('hinhanh')) {
            // Lưu ảnh vào thư mục lưu trữ (ví dụ: 'public/uploads')
            $path = $request->file('hinhanh')->store('uploads', 'public');
            // Lấy đường dẫn mới của ảnh và lưu vào cơ sở dữ liệu
            $blog->hinhanh = $path;
        }

        // Lưu các thay đổi vào cơ sở dữ liệu
        $blog->save();

        // Chuyển hướng về trang danh sách bài viết sau khi cập nhật thành công
        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        // Xác nhận xóa (nếu cần)
        
    
        // Thực hiện xóa bài viết
        $blog->delete();

        // Chuyển hướng về trang danh sách bài viết sau khi xóa thành công
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully');
    }

}
