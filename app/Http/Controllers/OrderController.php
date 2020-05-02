<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\Order as OrderResource;
use App\User;
use App\Order;
use App\OrderItem;
use Illuminate\Support\Facades\Hash;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('auth_token', $request->token)->first();
        $orders = Order::where('user_id', $user->id)->get();
        return OrderResource::collection($orders);
    }


    public function store(Request $request)
    {
        try{
            $user_exist = User::where('email', $request[0]['email']);
            if($user_exist->count() > 0){
                $user =  $user_exist->first();
            }else{
                $user =  User::create([
                    'name'        => $request[0]['name'],
                    'email'       => $request[0]['email'],
                    'phonenumber' => $request[0]['phonenumber'],
                    'zipcode'     => $request[0]['zipcode'],
                    'city'        => $request[0]['city'],
                    'address'     => $request[0]['address'],
                    'password'    => Hash::make('123456'),
                ]);
            }

            $order =  Order::create([
                'user_id' => $user->id,
                'status'  => 'Created',
            ]);

            //dispatch store items
            Self::createItems($request[1], $order);

            return response()->json(['msg' => 'Registered successful'], 201);
        }catch(\Exception $e){
            return json_encode(['error'=> 'Error while trying to register the order']);
        }
    }

    public function createItems($items, $order)
    {
        foreach($items as $item){
            OrderItem::create([
                'order_id'       => $order->id,
                'product_id'     => $item['id'],
                'amount'         => $item['amount'],
            ]);
        }
    }
}
