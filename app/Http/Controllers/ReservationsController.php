<?php

namespace App\Http\Controllers;


use App\Hotel_reservations;
use App\Rooms;

use Illuminate\Http\Request;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationsController extends Controller
{
    public function index()

    {
        return view('hotel_reservation');
    }

    public function reservationRoom(Request $request){

        $dateFrom = request('date_from');
        $dateTo = request('date_to');
        $roomId = request('room_id');
        $user_id = Auth::user()->id;

        $newDateFrom = date('Y-m-d', strtotime($dateFrom));
        $newDateTo = date('Y-m-d', strtotime($dateTo));

                        $hotel_reservations = new Hotel_reservations();
                        $hotel_reservations->room_id = $roomId;
                        $hotel_reservations->user_id = $user_id;
                        $hotel_reservations->date_from = $newDateFrom;
                        $hotel_reservations->date_to = $newDateTo;
                        $hotel_reservations->status = '0';
                        $hotel_reservations->save();

//
//        $message = "Reservation made!";
//        return redirect()->route('rooms')->with('jsAlert', $message);
            return redirect('hotel_reservation');

         }




}
