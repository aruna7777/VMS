<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vehiclescontroller extends Controller
{
    public function vehicle(){
        return view ('pages.vehicles');
    }
}
