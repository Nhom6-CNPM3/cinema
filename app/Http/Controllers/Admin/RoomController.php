<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Theater;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lấy danh sách các phòng chiếu kèm thông tin rạp chiếu phim tương ứng
        $rooms = DB::table('tbphong')
            ->join('tbrap', 'tbphong.id_rap', '=', 'tbrap.id_rap')
            ->select('tbphong.*', 'tbrap.tenrap')
            ->get();
        return view('admin.rooms.index', compact('rooms')); // Trả về view 'index' và truyền danh sách phòng chiếu vào
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $theaters = Theater::all(); // Lấy thông tin các rạp chiếu phim từ cơ sở dữ liệu

        return view('admin.rooms.create', compact('theaters')); // Trả về view 'create' và truyền danh sách các rạp chiếu phim vào view
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         // Validate request data
         $validatedData = $request->validate([
             'tenphong' => 'required|string|max:255', // Kiểm tra trường 'tenphong' có tồn tại và là chuỗi có độ dài tối đa 255 ký tự
             'id_rap' => 'required|exists:tbrap,id_rap', // Kiểm tra trường 'id_rap' có tồn tại trong bảng 'tbrap'
         ]);

         // Tạo một phòng chiếu mới và lưu vào cơ sở dữ liệu
         $room = new Room();
         $room->tenphong = $validatedData['tenphong'];
         $room->id_rap = $validatedData['id_rap'];
         $room->save();

         // Chuyển hướng về trang danh sách phòng chiếu sau khi lưu thành công
         return redirect()->route('admin.rooms.index');
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
    public function edit($id)
    {
        $room = Room::findOrFail($id); // Find the room by its ID
        $theaters = Theater::all(); // Retrieve all theaters for the dropdown

        return view('admin.rooms.edit', compact('room', 'theaters')); // Pass the room and theaters data to the edit view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the room by its ID
        $room = Room::findOrFail($id);

        // Validate the incoming request data
        $validatedData = $request->validate([
            'tenphong' => 'required|string|max:255',
            'id_rap' => 'required|exists:tbrap,id_rap', // Ensure the theater ID exists in the 'tbrap' table
        ]);

        // Update the room with the validated data
        $room->update($validatedData);

        // Redirect back to the room index page with a success message
        return redirect()->route('admin.rooms.index')->with('success', 'Room updated successfully');
    }

    public function destroy(string $id)
    {
        // Find the room by its ID
        $room = Room::findOrFail($id);

        // Delete the room
        $room->delete();

        // Redirect back to the room index page with a success message
        return redirect()->route('admin.rooms.index')->with('success', 'Room deleted successfully');
    }
}
