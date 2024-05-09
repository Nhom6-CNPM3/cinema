<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::join('tblichchieu', 'tbve.id_lichchieu', '=', 'tblichchieu.id_lichchieu')
                            ->join('tbrap', 'tblichchieu.id_rap', '=', 'tbrap.id_rap')
                            ->join('tbphong', 'tblichchieu.id_phong', '=', 'tbphong.id_phong')
                            ->join('tbghe', 'tbve.id_ghe', '=', 'tbghe.id_ghe')
                            ->join('tbphim', 'tblichchieu.id_phim', '=', 'tbphim.id_phim')
                            ->select('tbve.*', 'tbphim.atenphim', 'tbphim.giave', 'tbrap.tenrap', 'tbphong.tenphong', 'tbghe.soghe')
                            ->get();

        return view('admin.ticket.index', compact('tickets'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
