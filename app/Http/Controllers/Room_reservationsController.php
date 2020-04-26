<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Hotel_reservations;
use App\Rooms;
use App\User;
use Illuminate\Http\Request;

class Room_reservationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $hotel_reservations = DB::select(DB::raw(
            "SELECT r.title, hr.date_from, hr.date_to, u.name, u.email, u.phone, hr.status, hr.id as id_reservation
                FROM rooms r
                JOIN hotel_reservations hr ON r.id = hr.room_id
                JOIN users u ON u.id=hr.user_id"
        ));

        $data = compact('hotel_reservations');
        return view('/cms/room_reservations/index', $data);
    }

    public function reservationStatusChange($id_old_status, $id){


        $hotel_reservation = Hotel_reservations::find($id);
        if ( $id_old_status==0)
        {
            $hotel_reservation->status = '1';
            $hotel_reservation->save();
        }
        elseif($id_old_status==1){
            $hotel_reservation->status = '0';
            $hotel_reservation->save();
        }



        return redirect('/cms/room_reservations/index');
    }



    //tuka treba funkcija prvo da se napravi joinot shto treba, i potoa funkcijata da mozhe da zapishuva vo tabelata za rezervacii, STATUS



}
