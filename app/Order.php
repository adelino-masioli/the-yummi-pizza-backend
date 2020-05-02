<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'status'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function items()
    {
        return $this->hasMany('App\OrderItem');
    }
    public function sumTotalOrder($order){
        $items = OrderItem::where('order_id', $order->id);
        if($items->count() > 0){
            $sum_total_euro = 0;
            $sum_total_dollar = 0;
            foreach($items->get() as $item){
                foreach(Product::where('id', $item->product_id)->get() as $product){
                    $sum_total_euro    = $product->prices[0]['price'] * $item->amount;
                    $sum_total_dollar  = $product->prices[1]['price'] * $item->amount;
                    $sum_total_euro    += $sum_total_euro;
                    $sum_total_dollar  += $sum_total_dollar;
                }
            }
            $sum_total = ['euro' => number_format($sum_total_euro, 2), 'dollar' => number_format($sum_total_dollar, 2)];
            return $sum_total;
        }else{
            return 0;
        }
    }
}
