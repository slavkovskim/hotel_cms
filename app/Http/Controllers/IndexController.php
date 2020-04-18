<?php

namespace App\Http\Controllers;

use App\News;
use App\Rooms;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $news = News::orderBy('created_at', 'desc')->paginate(5);

        $rooms = Rooms::all();

        $data = compact('news', 'rooms');

        return view('/homepage', $data);


    }
}
