<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\RestaurantList;

class viewOnlyBladesController extends Controller
{
    public function restaurant_list(){
        $restaurant_list = RestaurantList::get();
        // return $restaurant_list;
        return view('pages.restaurant_list',compact('restaurant_list'));
    }
    public function item_order_page(Request $req){
        return view('pages.item_order_page');

    }
}
