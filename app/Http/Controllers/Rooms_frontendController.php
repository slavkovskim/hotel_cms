<?php


namespace App\Http\Controllers;

use App\Rooms;
use App\RoomsGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;


class Rooms_frontendController extends Controller
{
//need new rooms controller for front end
    public function indexRoomsFe()
    {
        $rooms = Rooms::all();
        return view('/rooms')->with('rooms', $rooms);
    }
}