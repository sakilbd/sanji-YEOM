<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersInfo extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'first_name', 'surname', 'email', 'pass', 'user_role', 'country', 'contact_number', 'credit_card_number', 'pin', 'gender', 'card_balance', 'created_at', 'updated_at'];
}
