<?php

namespace App\Http\Controllers;

use App\Spa_reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return view('spa_treatment_reservations');
    }

    public function reservationSpa(Request $request){

        $dateFrom = request('time_date_from');
        $dateTo = request('time_date_to');
        $spaId = request('spa_treatment_id');
        $user_id = Auth::user()->id;

        $newDateFrom = date('Y-m-d H:i', strtotime($dateFrom)); //maybe problem now with hours
        $newDateTo = date('Y-m-d H:i', strtotime($dateTo));


        $spa_reservations = new Spa_reservations();

        $spa_reservations->spa_treatment_id = $spaId;
        $spa_reservations->time_date_from = $newDateFrom;
        $spa_reservations->time_date_to = $newDateTo;
        $spa_reservations->user_id = $user_id;
        $spa_reservations->status = '0';
        $spa_reservations->save();

        return redirect('spa_treatment_reservations');

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
