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
    //napravi ruta vo veb php za rezervacija za koga ke kliknes na kopceto bok now vo formata taa ruta za da ide vo kontrolerot
    public function reservationRoom(Request $request){

        $dateFrom = request('date_from');
        $dateTo = request('date_to');
        $roomId = request('room_id');
        $user_id = Auth::user()->id;

        $newDateFrom = date('Y-m-d', strtotime($dateFrom));
        $newDateTo = date('Y-m-d', strtotime($dateTo));

        $rezervacii = DB::select(DB::raw(
                "SELECT * FROM `hotel_reservations` hr JOIN `rooms` r ON r.id = hr.room_id
                            WHERE r.id = $roomId"
        ));
        //prven pravime proverka na datumot i sobata dali veke ima takva rezervacija

        if($rezervacii!=null)
        {
        foreach($rezervacii as $rez){
            $rez->dateFrom; //ovie se od baza
            $rez->dateTo;
         //kombinacii sto moze da izlezat, primer da se sovpadnat denovite, da ima razmak, sto kako
          //  if(//ima nema se poklopuva itn){

         //   }
        }
            return redirect('hotel_reservation');
        }
        else
            {
            //napravi rezervacija bez nikakvi uslovi

            //tuka se proveruva dali quantity > 0

            $rezervacija = DB::select(DB::raw(
                "SELECT quantity FROM `rooms` WHERE id=$roomId"
            ));


    foreach($rezervacija as $rez) {

        if ($rez->quantity > 0 ) {
    //insert hotel_reservations

        $hotel_reservations = new Hotel_reservations();
        $hotel_reservations->room_id = $roomId;
        $hotel_reservations->user_id = $user_id;
        $hotel_reservations->date_from = $newDateFrom;
        $hotel_reservations->date_to = $newDateTo;
        $hotel_reservations->save();

        //tuka napraj si insert kako vo employees kontrolerot


        $rooms = Rooms::find($roomId);
        $rooms->quantity = $rez->quantity-1;
        $rooms->save();
         }

    }

 return redirect('hotel_reservation');
        }

    }


}
