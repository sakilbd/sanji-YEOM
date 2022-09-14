<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\RestaurantList;
use App\Models\ItemList;
use App\Models\OrderManagement;
use Illuminate\Support\Facades\Auth;
use App\Models\UsersInfo;
use App\Models\addOns;

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
    public function order_cart(){
        $order = OrderManagement::with("itemInfo")->get();
        $addons = addOns::get();
        // return $order;
        
        return view('pages.order_cart',compact('order','addons'));
    }
    public function table_gen(){
    
        $filename = 'ltCodedata.json';
        $data = file_get_contents($filename);
        $data = json_encode($data);
        // return $data;
        
        return view('table',compact('data'));
    }

    
}
