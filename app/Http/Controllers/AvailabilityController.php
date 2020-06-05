<?php

namespace App\Http\Controllers;

use App\Availability;
use App\Room;
use App\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class AvailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('availabilities.index', ['availabilities' => Availability::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('availabilities.create', [
            'room' => $request->get('room'),
            'roomType' => $request->get('roomType'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $allAvailabilities = $this->prepareDate()->map(fn ($time) => new Availability(['time' => $time]));

        $this->findType()->availabilities()->saveMany($allAvailabilities);

        return redirect('/availabilities');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Availability $availability)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Availability $availability)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Availability $availability)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Availability $availability)
    {
    }

    private function findType()
    {
        $available = null;

        if (request()->filled('room')) {
            $available = Room::findOrFail(request()->input('room'));
        }
        if (request()->filled('roomType')) {
            $available = RoomType::findOrFail(request()->input('roomType'));
        }

        if ($available) {
            return $available;
        }

        abort(404);
    }

    private function prepareDate()
    {
        $dates = Str::of(request()->input('date'))->explode(',');
        $times = Str::of(request()->input('times'))->explode(',');

        return $dates
            ->crossJoin($times)
            ->map(fn ($item) => implode(' ', $item))
            ->map(fn ($item) => Carbon::parse($item))
        ;
    }
}
