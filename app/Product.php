<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function stock()
    {
        return $this->hasMany('App\ProductStock');
    }
    public function prices()
    {
        return $this->hasMany('App\ProductPrice');
    }
}
