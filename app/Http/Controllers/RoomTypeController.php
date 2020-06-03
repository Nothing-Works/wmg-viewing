<?php

namespace App\Http\Controllers;

use App\Property;
use App\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Property $property)
    {
        return view('room-types.index', ['property' => $property->load('roomTypes')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Property $property)
    {
        return view('room-types.create', ['property' => $property]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Property $property)
    {
        $property->roomTypes()->create($request->all());

        return redirect('/room-types/'.$property->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property, RoomType $type)
    {
        return view('room-types.edit', ['type' => $type, 'property' => $property]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property, RoomType $type)
    {
        $type->update($request->all());

        return redirect('/room-types/'.$property->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property, RoomType $type)
    {
        $type->delete();

        return redirect('/room-types/'.$property->id);
    }
}
