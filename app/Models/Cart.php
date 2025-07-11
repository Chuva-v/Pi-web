<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable=['user_id','session_id','last_activity'];
    
    public function items(){
      return $this->hasMany(Cart_item::class);
    }
}
