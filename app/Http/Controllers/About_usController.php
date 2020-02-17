<?php

namespace App\Http\Controllers;

use App\About_us;
use Illuminate\Http\Request;

class About_usController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_us = About_us::find('1');
        $data = compact('about_us');
        return view('/cms/about_us/index' ,$data);


        //na kraj ovde se stava return za da go vrati viewto
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
     * @param  \App\About_us  $about_us
     * @return \Illuminate\Http\Response
     */
    public function show(About_us $about_us)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About_us  $about_us
     * @return \Illuminate\Http\Response
     */
    public function edit(About_us $about_us)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About_us  $about_us
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About_us $about_us)
    {
        $id_about_us = request('id_about_us');
        $about_us = About_us::find($id_about_us);
        $about_us->title = request('title');
        $about_us->description = request('description');
        $about_us->save();

        return redirect('/cms/about_us/index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About_us  $about_us
     * @return \Illuminate\Http\Response
     */
    public function destroy(About_us $about_us)
    {
        //
    }
}
