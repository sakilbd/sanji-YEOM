<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\RestaurantList;
use App\Models\ItemList;
use Illuminate\Support\Facades\Auth;
use App\Models\UsersInfo;

class viewOnlyBladesController extends Controller
{
    public function restaurant_list(){
        $restaurant_list = RestaurantList::get();
        // return $restaurant_list;
        return view('pages.restaurant_list',compact('restaurant_list'));
    }
    public function item_order_page(Request $req){
       
        $restaurant_info = RestaurantList::where('id',$req->restaurant_id)->first();
        $food = ItemList::where('restaurant_id',$req->restaurant_id)->where('catagory',2)->get();
        $beverage =ItemList::where('restaurant_id',$req->restaurant_id)->where('catagory',1)->get();
        $user_balance = UsersInfo::select('card_balance')->where('user_id',Auth::user()->id)->first();

        
        
        // return $restaurant_info;
        return view('pages.item_order_page',compact('restaurant_info','food','beverage','user_balance'));

    }
}
