<?php

namespace App\Http\Controllers;

use App\Http\Resources\GuestCollection;
use App\Http\Resources\GuestResource;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guests = Guest::all();
        return new GuestCollection($guests);
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
            'first_name' => 'required|string|max:25',
            'last_name' => 'required|string|max:25',
            'birthdate' => 'required|string|max:10',
            'reservation_id' => 'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $guest = Guest::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birthdate' => $request->birthdate,
            'reservation_id' => $request->reservation_id
        ]);

        return response()->json(['Guest created', new GuestResource($guest)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        return new GuestResource($guest);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:25',
            'last_name' => 'required|string|max:25',
            'birthdate' => 'required|string|max:10',
            'reservation_id' => 'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $guest->first_name = $request->first_name;
        $guest->last_name = $request->last_name;
        $guest->birthdate = $request->birthdate;
        $guest->reservation_id = $request->reservation_id;

        $guest->save();

        return response()->json(['Guest updated', new GuestResource($guest)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
        $guest->delete();
        return [
            'message' => 'Guest deleted'
        ];
    }
}