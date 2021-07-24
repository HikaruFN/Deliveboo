<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        $orders_array = [];

        foreach ($orders as $order) {

           $orders_array[] = [
               
               'id' => $order->id,

               'amount' => $order->amount,

               'created_at' => $order->created_at
           ];

           $result = [
               'order' => $orders_array,

               'success' => true
           ];
        }


       
        return response()->json($result);
    }

}