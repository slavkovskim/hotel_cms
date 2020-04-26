<?php

namespace App\Http\Controllers;

use App\Spa_reservations;
use Illuminate\Http\Request;

class Spa_reservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spa_reservations = Spa_reservations::all();

        return view('spa_reservations');
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
     * @param  \App\Spa_reservations  $spa_reservations
     * @return \Illuminate\Http\Response
     */
    public function show(Spa_reservations $spa_reservations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spa_reservations  $spa_reservations
     * @return \Illuminate\Http\Response
     */
    public function edit(Spa_reservations $spa_reservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spa_reservations  $spa_reservations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spa_reservations $spa_reservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spa_reservations  $spa_reservations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spa_reservations $spa_reservations)
    {
        //
    }
}
