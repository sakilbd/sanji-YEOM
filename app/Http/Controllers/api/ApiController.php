<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemList;
use Illuminate\Support\Carbon;
use App\Models\RestaurantList;

class ApiController extends Controller
{
   public function item_insert(Request $request){
      // return $request;
    $items = new ItemList;
    // return $items;
    $id = Carbon::now()->format('YmdGis');
    if ($request->file('item_image_url') != null) {
      $req_image = $request->file('item_image_url');
      $imgExtension = $req_image->getclientoriginalextension();
      $imageName = 'item'.$id.'.' . $imgExtension;
      $uploadPath = 'imgStorage';
      $req_image->move($uploadPath, $imageName);
      $imageUrl = $uploadPath . '/' . $imageName;
      $items->item_image_url =  $imageUrl;
    }
   
    $items->name = $request->name;
    $items->price = $request->price;
    $items->catagory = $request->catagory;
    $items->restaurant_id = $request->restaurant_id;
   //  $items->item_image_url = $request->item_image_url;
    $items->created_at = $request->created_at;
    $items->updated_at = $request->updated_at;
    $items->save();

    return "data_Saved";
   }
   
   public function restaurant_add(Request $request){
    // return $request;
    $items = new RestaurantList();
    // return $items;
    $id = Carbon::now()->format('YmdGis');
    if ($request->file('image') != null) {
      $req_image = $request->file('image');
      $imgExtension = $req_image->getclientoriginalextension();
      $imageName = 'item'.$id.'.' . $imgExtension;
      $uploadPath = 'imgStorage';
      $req_image->move($uploadPath, $imageName);
      $imageUrl = $uploadPath . '/' . $imageName;
      $items->image =  $imageUrl;
    }
    
    $items->name = $request->name;
    $items->manager_user_id = $request->manager_user_id;
    $items->created_at = $request->created_at;
    $items->updated_at = $request->updated_at;
    $items->save();

    return "Restaurant added";
   }

  public function catagory_add(Request $request){
   return $request;
  }
}
