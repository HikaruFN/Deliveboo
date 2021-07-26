<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dish;

class Dishcontroller extends Controller
{
    public function index($id)
    {
        $dishes = Dish::all();
        $dishes_array = [];
        foreach ($dishes as $dish) {
            if($dish->id == $id){
                $dishes_array[] = [
                    'id' => $dish->id,
                    'name' => $dish->name,
                    'description' => $dish->description,
                    'price' => $dish->price,
                    'cover' => $dish->cover,
                    'quantity'  => $dish->quantity,
                    'visibility'  => $dish->visibility,
                ];
                $result = [
                    'dish' => $dishes_array,
                    'success' => true
                ];
            }
        }     
        return response()->json($result);
    }

    public function allDishes()
    {
        $dishes = Dish::all();
        $allDishes_array = [];
        foreach ($dishes as $dish) {
            $allDishes_array[] = [
                'id' => $dish->id,
                'name' => $dish->name,
                'description' => $dish->description,
                'price' => $dish->price,
                'cover' => $dish->cover,
                'user_id' => $dish->user_id,
                'quantity'  => $dish->quantity,
                'visibility'  => $dish->visibility,
            ];
            $result = [
                'dish' => $allDishes_array,
                'success' => true
            ];
        }     
        return response()->json($result);
    }
}
