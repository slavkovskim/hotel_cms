<?php

namespace App\Http\Controllers;

use App\Employees;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class EmployeesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employees::all();
        $data = compact('employees');
        return view('/cms/employees/index' ,$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/cms/employees/create_employee');
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
        $user->type = '1';
        $user->save();

        $user_id = DB::table('users')->latest('id')->first();

        $employee = new Employees();
        $employee->name = request('name');
        $employee->surname = request('surname');
        $employee->phone = request('phone');
        $employee->email = request('email');
        $employee->gender = request('gender');
        $employee->works_at = request('works_at');
        $employee->user_id = $user_id->id;
        $employee->save();

        return redirect('/cms/employees/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $employe = Employees::find($id);
        $data = compact('employe');

        return view('/cms/employees/edit_employee', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employees $employees)
    {
        $user_id = request('user_id');
        $employe_id = request('employe_id');
        if(request('password')!=null)
        {

            $user = User::find($user_id);
            $user->password = Hash::make(request('password'));
            $user->email = request('email');
            $user->save();

            $employee = Employees::find($employe_id);
            $employee->name = request('name');
            $employee->surname = request('surname');
            $employee->phone = request('phone');
            $employee->email = request('email');
            $employee->works_at = request('works_at');
            $employee->gender = request('gender');
            $employee->save();
            return redirect('/employees/index');
        }
        else{

            $user = User::find($user_id);
            $user->email = request('email');
            $user->save();

            $employee = Employees::find($employe_id);
            $employee->name = request('name');
            $employee->surname = request('surname');
            $employee->phone = request('phone');
            $employee->email = request('email');
            $employee->works_at = request('works_at');
            $employee->gender = request('gender');
            $employee->save();
            return redirect('/cms/employees/index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_2)
    {
        DB::table('employees')->where('id', '=', $id)->delete();
        DB::table('users')->where('id', '=', $id_2)->delete();
        return redirect('/cms/employees/index');
    }
}
