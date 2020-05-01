<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['order_id', 'product_id', 'amount'];

    public function order()
    {
        return $this->hasOne('App\Order');
    }
}
