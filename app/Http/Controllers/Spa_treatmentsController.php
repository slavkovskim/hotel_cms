<?php

namespace App\Http\Controllers;

use App\Spa_treatments;
use Illuminate\Http\Request;

class Spa_treatmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spa_treatments = Spa_treatments::all();
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
     * @param  \App\Spa_treatments  $spa_treatments
     * @return \Illuminate\Http\Response
     */
    public function show(Spa_treatments $spa_treatments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spa_treatments  $spa_treatments
     * @return \Illuminate\Http\Response
     */
    public function edit(Spa_treatments $spa_treatments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spa_treatments  $spa_treatments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spa_treatments $spa_treatments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spa_treatments  $spa_treatments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spa_treatments $spa_treatments)
    {
        //
    }
}
