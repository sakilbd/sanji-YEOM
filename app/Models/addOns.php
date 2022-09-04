<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addOns extends Model
{
    use HasFactory;
    protected $fillable =['name','price','catagory_id','created_at','updated_at'];
}
