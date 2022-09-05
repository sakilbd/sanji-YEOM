<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemList;
use Illuminate\Support\Carbon;
use App\Models\RestaurantList;
use App\Models\ItemCatagory;
use App\Models\UsersInfo;
use App\Models\OrderManagement;
use App\Traits\ApiResponser;
use App\Models\addOns;

class ApiController extends Controller
{
    use ApiResponser;
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

    return "Item Added";
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
    if ($request->file('cover_photo') != null) {
      $req_image = $request->file('cover_photo');
      $imgExtension = $req_image->getclientoriginalextension();
      $imageName = 'coverPhoto'.$id.'.' . $imgExtension;
      $uploadPath = 'imgStorage';
      $req_image->move($uploadPath, $imageName);
      $imageUrl = $uploadPath . '/' . $imageName;
      $items->cover_photo =  $imageUrl;
    }
    
    $items->name = $request->name;
    $items->manager_user_id = $request->manager_user_id;
    $items->created_at = $request->created_at;
    $items->updated_at = $request->updated_at;
    $items->save();

    return "Restaurant added";
   }

  public function catagory_add(Request $request){
    $catagory = new ItemCatagory();

    $catagory->catagory_name = $request->catagory_name;
    $catagory->created_at = $request->created_at;
    $catagory->updated_at = $request->updated_at;
    $catagory->save();
   return "Catagorry Added";
  }

  public function user_info_add(Request $request){
    
    UsersInfo::create($request->all());
    return 'User Detailed Info added';
    
  }

  public function order_insert(Request $request){
    OrderManagement::create($request->all());
    return $this->success("Item Added To Cart",'');
    
  }

  public function addOns_insert(Request $request){
    $data = addOns::create($request->all());
    return $this->success("Addons Added",$data);
  }

  public function confirm_order(Request $request){
    return $this->success("Order Confirmed",$request->all());
  }
}
