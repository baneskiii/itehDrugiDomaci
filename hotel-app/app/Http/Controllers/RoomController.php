<?php

namespace App\Http\Controllers;

use App\Http\Resources\GuestResource;
use App\Http\Resources\RoomCollection;
use App\Http\Resources\RoomResource;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return new RoomCollection($rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'floor' => 'required|integer|between:1,3',
            'area_in_square_meters' => 'required|integer|between:30,80',
            'number_of_beds' => 'required|integer|between:2,4'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $room = Room::create([
            'floor' => $request->floor,
            'area_in_square_meters' => $request->area_in_square_meters,
            'number_of_beds' => $request->number_of_beds
        ]);

        return response()->json(['Room created', new RoomResource($room)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return new RoomResource($room);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $validator = Validator::make($request->all(), [
            'floor' => 'required|integer|between:1,3',
            'area_in_square_meters' => 'required|integer|between:30,80',
            'number_of_beds' => 'required|integer|between:2,4'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $room->floor = $request->floor;
        $room->area_in_square_meters = $request->area_in_square_meters;
        $room->number_of_beds = $request->number_of_beds;

        $room->save();

        return response()->json(['Room updated', new RoomResource($room)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return response()->json('Room deleted');
    }
}