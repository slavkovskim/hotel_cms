<?php

namespace App\Http\Controllers;

use App\Spa;
use Illuminate\Http\Request;
use App\Employees;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spas = Spa::all();
        $employees = Employees::all();
        return view('/cms/spa/index')->with('spas', $spas)->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('/cms/spa/create_spa');
        //ili ovde da bide kodot od metodata pod nea??
    }

    //added new method for employees!

    public function spa_employee(){
        $employees = DB::select(DB::raw(
            "SELECT * FROM `employees` WHERE works_at LIKE 0"
        ));

        $data = compact('employees');

        return view('/cms/spa/create_spa', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spa = new Spa();

//          $employees = Employees::all();  //ovaka sigurno gi vlece vrabotenite isprobano
//        dd($employees);

        //treba da smislam kako nekako ID-to na odbraniot vraboten od VIEW-to da go predadam ovde (weird naopacki)

        if($request->hasFile('file')) {

            $cover = $request->file('file');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFilename() . '.' . $extension, File::get($cover));
            $spa->cover_image = $cover->getFilename() . '.' . $extension;

            $spa->title = request('title');
            $spa->description = request('description');
            $spa->employee_id = request('employee_id');  //OVA TI E IMETO VO VIEW-TO!!!! PRIPAZUVAJ NA OVA!!!!

            $spa->time_from = request('time_from');
            $spa->time_to = request('time_to');

            $spa->price = request('price');
            $spa->save();

        }
        else
        {
            $spa->title = request('title');
            $spa->description = request('description');

            $spa->employee_id = request('employee_id');  //OVA TI E IMETO VO VIEW-TO!!!! PRIPAZUVAJ NA OVA!!!!

            $spa->time_from = request('time_from');
            $spa->time_to = request('time_to');

            $spa->price = request('price');
            $spa->save();


        }
        return \redirect('/cms/spa/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function show(Spa $spa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spas = Spa::find($id);
        $employees = Employees::all(); //not all, but when ID is 0   for spa
        return view('/cms/spa/edit_spa')->with('spas', $spas)->with('employees', $employees);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spa $spa)
    {
        $spas_id = request('spas_id');
        $spa = Spa::find($spas_id);

        if($request->hasFile('file')) {

            $cover = $request->file('file');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFilename() . '.' . $extension, File::get($cover));
            $spa->cover_image = $cover->getFilename() . '.' . $extension;

            $spa->title = request('title');
            $spa->description = request('description');
            $spa->employee_id = request('employee_id');
            $spa->price = request('price');
            $spa->save();


        }
        else
        {
            $spa->title = request('title');
            $spa->description = request('description');
            $spa->employee_id = request('employee_id');
            $spa->price = request('price');
            $spa->save();


        }
        return \redirect('/cms/spa/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('spa_treatments')->where('id', '=', $id)->delete();
        return redirect('/cms/spa/index');
    }
}
