<?php

namespace App\Http\Controllers;

use App\Hotel_reservations;
use Illuminate\Http\Request;

class Hotel_reservationsController extends Controller
{
//
//    public function __construct()
//    {
//        $this->middleware('auth:admin');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel_reservations = Hotel_reservations::all();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel_reservations  $hotel_reservations
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel_reservations $hotel_reservations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel_reservations  $hotel_reservations
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel_reservations $hotel_reservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel_reservations  $hotel_reservations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel_reservations $hotel_reservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel_reservations  $hotel_reservations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel_reservations $hotel_reservations)
    {
        //
    }
}
