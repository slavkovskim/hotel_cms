<?php

namespace App\Http\Controllers;

use App\Clients;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::all();
        $data = compact('clients');
        return view ('/cms/clients/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('/cms/clients/create_client');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed'
        ]);
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->type = '0'; //this should be 0 for clients????
        $user->save();

        $user_id = DB::table('users')->latest('id')->first();


        $client = new Clients();
        $client->name = request('name');
        $client->surname = request('surname');
        $client->phone = request('phone');
        $client->email = request('email');
        $client->gender = request('gender');
        $client->user_id = $user_id->id;
        $client->save();

        return redirect('/cms/clients/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(Clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Clients::find($id);
        $data = compact('client');

        return view('/cms/clients/edit_client', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clients $clients)
    {
        $user_id = request('user_id');
        $client_id = request('employe_id');
        if(request('password')!=null)
        {

            $user = User::find($user_id);
            $user->password = Hash::make(request('password'));
            $user->email = request('email');
            $user->save();

            $client = Clients::find($client_id);
            $client->name = request('name');
            $client->surname = request('surname');
            $client->phone = request('phone');
            $client->email = request('email');
            $client->gender = request('gender');
            $client->save();

            return redirect('/clients/index');
        }
        else{

            $user = User::find($user_id);
            $user->email = request('email');
            $user->save();

            $client = Clients::find($client_id);
            $client->name = request('name');
            $client->surname = request('surname');
            $client->phone = request('phone');
            $client->email = request('email');
            $client->gender = request('gender');
            $client->save();

            return redirect('/cms/clients/index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_2)
    {
        DB::table('clients')->where('id', '=', $id)->delete();
        DB::table('users')->where('id', '=', $id_2)->delete();
        return redirect('/cms/clients/index');
    }
}
