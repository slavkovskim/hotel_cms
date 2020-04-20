<?php

namespace App\Http\Controllers;

use App\Employees;
use App\Http\Controllers\Controller;
use App\Spa;

class Spa_frontendController extends Controller
{

    public function indexSpaFe()
    {
        $spas = Spa::all();
        $employees = Employees::all();
        return view('/spa')->with('spas', $spas)->with('employees', $employees);
    }
}