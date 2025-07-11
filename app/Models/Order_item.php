<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    protected $fillable = ['order_id', 'produto_id', 'quantity', 'price'];
}