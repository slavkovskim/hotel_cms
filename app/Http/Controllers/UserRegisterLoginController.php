<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserRegisterLoginController extends Controller
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function userregisterpost(Request $data)
    {

        $data->validate([
            'email' => 'required|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
            'username' => 'required',
            'name' => 'required',
            'surname' => 'required'
        ]);

        $user = new User();

        $user->username = request('username');
        $user->name = request('name');
        $user->surname = request('surname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));

        $user->type = '1';
        $user->save();

        \Illuminate\Support\Facades\Auth::login($user);

        return redirect('homepage');

    }

}
