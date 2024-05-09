<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\Movie;
use App\Models\Theater;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::join('tbphim', 'tblichchieu.id_phim', '=', 'tbphim.id_phim')
                              ->join('tbrap', 'tblichchieu.id_rap', '=', 'tbrap.id_rap')
                              ->join('tbphong', 'tblichchieu.id_phong', '=', 'tbphong.id_phong')
                              ->select('tblichchieu.*', 'tbphim.atenphim', 'tbrap.tenrap', 'tbphong.tenphong')
                              ->get();
        return view('admin.schedules.index', compact('schedules'));
    }


    public function create()
    {
        $movies = Movie::all(); // Lấy danh sách tất cả phim

        $theaters = Theater::all(); // Lấy danh sách tất cả rạp
        $rooms = Room::all(); // Lấy danh sách tất cả phòng chiếu

        return view('admin.schedules.create', compact('movies', 'theaters', 'rooms'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'id_phim' => 'required',
            'id_rap' => 'required',
            'id_phong' => 'required',
            'ngay' => 'required',
            'gio' => 'required',
        ]);
        Schedule::create($request->all());

        return redirect()->route('admin.schedules.index')
            ->with('success', 'Schedule created successfully.');
    }


    public function show($id)
    {
        $schedule = Schedule::find($id);
        return view('admin.schedules.show', compact('schedule'));
    }


    public function edit($id)
    {
        $schedule = Schedule::find($id);
        $movies = Movie::all();
        $theaters = Theater::all();
        $rooms = Room::all();
        return view('admin.schedules.edit', compact('schedule', 'movies', 'theaters', 'rooms'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id_phim' => 'required',
            'id_rap' => 'required',
            'id_phong' => 'required',
            'ngay' => 'required',
            'gio' => 'required',
        ]);

        $schedule = Schedule::find($id);
        $schedule->update($request->all());

        return redirect()->route('admin.schedules.index')
            ->with('success', 'Schedule updated successfully');
    }
     public function destroy($id)
    {
        Schedule::destroy($id);
        return redirect()->route('admin.schedules.index')
            ->with('success', 'Schedule deleted successfully');
    }
}
