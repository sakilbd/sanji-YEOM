<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderManagement extends Model
{
    use HasFactory;
    protected $fillable =['item_id','quantity','client_id','order_status','total_price','created_at','updated_at'];
}

