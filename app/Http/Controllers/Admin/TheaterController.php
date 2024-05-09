<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Theater;
use Illuminate\Http\Request;

class TheaterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lấy tất cả các bản ghi từ bảng tbrap
        $theaters = Theater::all(); // hoặc Theater::get();

        // Truyền dữ liệu vào view 'admin.theater.index'
        return view('admin.theaters.index', compact('theaters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.theaters.create' );

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request data nếu cần
        $validatedData = $request->validate([
            'tenrap' => 'required|string', // Đảm bảo tên rạp không rỗng và là chuỗi
        ]);

        // Tạo mới một instance của model Theater và lưu vào cơ sở dữ liệu
        $theater = new Theater();
        $theater->tenrap = $validatedData['tenrap']; // Lấy dữ liệu từ request
        $theater->save(); // Lưu vào cơ sở dữ liệu

        // Redirect hoặc thực hiện hành động tiếp theo
        return redirect()->route('admin.theaters.index');
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
        // Lấy thông tin rạp cần chỉnh sửa từ cơ sở dữ liệu
        $theater = Theater::findOrFail($id);

        // Trả về view chỉnh sửa với thông tin của rạp
        return view('admin.theaters.edit', compact('theater'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Lấy thông tin rạp cần cập nhật từ cơ sở dữ liệu
        $theater = Theater::findOrFail($id);

        // Cập nhật các trường thông tin của rạp
        $theater->tenrap = $request->tenrap;

        // Lưu các thay đổi vào cơ sở dữ liệu
        $theater->save();

        // Redirect hoặc thực hiện hành động tiếp theo
        return redirect()->route('admin.theaters.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Lấy thông tin rạp cần xóa từ cơ sở dữ liệu
        $theater = Theater::findOrFail($id);

        // Xóa rạp khỏi cơ sở dữ liệu
        $theater->delete();

        // Redirect hoặc thực hiện hành động tiếp theo
        return redirect()->route('admin.theaters.index');
    }

}
