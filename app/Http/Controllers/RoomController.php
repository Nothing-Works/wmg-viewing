<?php

namespace App\Http\Controllers;

use App\Room;
use App\RoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RoomType $type)
    {
        return view('rooms.index', ['type' => $type->load('rooms')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(RoomType $type)
    {
        return view('rooms.create', ['type' => $type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RoomType $type)
    {
        $type->rooms()->create($request->all());

        return redirect('/rooms/'.$type->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomType $type, Room $room)
    {
        return view('rooms.edit', ['type' => $type, 'room' => $room]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomType $type, Room $room)
    {
        $room->update($request->all());

        return redirect('/rooms/'.$type->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomType $type, Room $room)
    {
        $room->delete();

        return redirect('/rooms/'.$type->id);
    }
}
