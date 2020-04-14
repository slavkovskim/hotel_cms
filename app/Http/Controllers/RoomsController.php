<?php

namespace App\Http\Controllers;

use App\Rooms;
use App\RoomsGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Rooms::all();
        return view('/cms/rooms/index')->with('rooms', $rooms);

    }

    public function indexRoomsFe(){
        $rooms = Rooms::all();
        return view('/rooms')->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/cms/rooms/create_rooms');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = new Rooms();

        if($request->hasFile('file')) {

            $cover = $request->file('file');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFilename() . '.' . $extension, File::get($cover));
            $room->cover_image = $cover->getFilename() . '.' . $extension;

            $room->title = request('title');

            $room->description = request('description');
            $room->room_type = request('room_type');
            $room->beds_number = request('beds_number');
            $room->price = request('price');
            $room->save();


        }
        else
        {
            $room->title = request('title');
            $room->description = request('description');
            $room->room_type = request('room_type');
            $room->beds_number = request('beds_number');
            $room->price = request('price');
            $room->save();


        }
        return \redirect('/cms/rooms/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function show(Rooms $rooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rooms = Rooms::find($id);
        return view ('cms/rooms/edit_rooms')->with('rooms',$rooms);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rooms $rooms)
    {
//        $room = new Rooms();

        $room_id=request('room_id');
        $room = Rooms::find($room_id);

        if($request->hasFile('file')) {

            $cover = $request->file('file');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFilename() . '.' . $extension, File::get($cover));
            $room->cover_image = $cover->getFilename() . '.' . $extension;

            $room->title = request('title');

            $room->description = request('description');
            $room->room_type = request('room_type');
            $room->beds_number = request('beds_number');
            $room->price = request('price');
            $room->save();


        }
        else
        {
            $room->title = request('title');
            $room->description = request('description');
            $room->room_type = request('room_type');
            $room->beds_number = request('beds_number');
            $room->price = request('price');
            $room->save();


        }
        return \redirect('/cms/rooms/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table('rooms_gallery')->where('id_room', '=', $id)->delete();
        DB::table('rooms')->where('id', '=', $id)->delete();


        return redirect('/cms/rooms/index');
    }

    //new methods below

    public function gallery($id)
    {
        $rooms_gallery = DB::select(DB::raw(
            "SELECT * FROM `rooms_gallery` WHERE id_room=$id"
        ));
        $room_id = $id;

        $data = compact('rooms_gallery','room_id');
        return view('/cms/rooms/gallery', $data);
    }
    public function store_image(Request $request){
        if($request->hasfile('file'))
        {

            $id_room = request('id_room');
            $files = $request->file('file');
            foreach($files as $image)
            {

                $extension = $image->getClientOriginalExtension();
                Storage::disk('public')->put($image->getFilename() . '.' . $extension, File::get($image));
                $imageName = $image->hashName();

                $room_gallery = new RoomsGallery();
                $room_gallery->id_room = $id_room;
                $room_gallery->image = $image->getFilename() . '.' . $extension;;

                $room_gallery->save();
            }
        }

        return redirect('cms/rooms/gallery/'.$id_room);
    }
    public function delete_gallery_image($id, $id_room)
    {
        DB::table('rooms_gallery')->where('id', '=', $id)->delete();
        return redirect('/cms/rooms/gallery/'.$id_room); //where to go better? it should redirect to /cms/rooms/gallery/id_of_gallery
    }
}
