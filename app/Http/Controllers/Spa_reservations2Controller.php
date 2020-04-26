<?php

namespace App\Http\Controllers;

use App\Spa_reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Spa_reservations2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $spa_reservations = DB::select(DB::raw(
            "SELECT r.title, hr.time_date_from, hr.time_date_to, u.name, u.email, hr.status, u.phone, e.name as ime_emp, hr.id as id_reservation
                FROM spa_treatments r
                JOIN spa_reservations hr ON r.id = hr.spa_treatment_id
                JOIN users u ON u.id=hr.user_id
                JOIN employees e ON e.id=r.employee_id
                ORDER BY time_date_from;"
        ));


        $data = compact('spa_reservations');
        return view('/cms/spa_reservations/index', $data);
    }
    public function spaReservationStatusChange($id_old_status, $id){


        $spa_reservation = Spa_reservations::find($id);
        if ( $id_old_status==0)
        {
            $spa_reservation->status = '1';
            $spa_reservation->save();
        }
        elseif($id_old_status==1){
            $spa_reservation->status = '0';
            $spa_reservation->save();
        }



        return redirect('/cms/spa_reservations/index');
    }
}
