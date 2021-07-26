<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Dish;
use App\User;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index($id)
    {
        $dishes = Dish::all();
        
        $filteres_dishes = [];

        foreach ($dishes as $dish) {
            if($dish->user_id == $id){
                $filteres_dishes[]=[
                    'id' => $dish->id,
                    'name' => $dish->name,
                    'description' => $dish->description,
                    'price' => $dish->price,
                    'cover' => $dish->cover,
                    'quantity'  => $dish->quantity,
                    'visibility'  => $dish->visibility,
                    'orders' => $dish->orders
                ];
            }
        }
           
        
        $result = [
            'dishes' => $filteres_dishes,
            'success' => true
        ];

       /*  $orders = Order::all(); */
      /*   $dishes = Dish::user()->dishes; */
       /*  $users = User::findOrFail($id);
        $orders_array = [];

        foreach ($users as $user) {

           $orders_array[] = [
               
               'id' => $user->id,

               'amount' => $user->amount,

               'created_at' => $user->created_at
           ];

           $result = [
               'order' => $orders_array,

               'success' => true
           ];
        } */


       
        return response()->json($result);
    }

}