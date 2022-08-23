<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewOnlyBladesController extends Controller
{
    public function restaurant_list(){
        return view('pages.restaurant_list');
    }
}
