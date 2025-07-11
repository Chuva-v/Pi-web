<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart_item extends Model
{
    protected $fillable = ['cart_id', 'produto_id', 'quantity'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
