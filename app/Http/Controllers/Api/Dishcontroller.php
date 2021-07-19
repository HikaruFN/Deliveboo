<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dish;

class Dishcontroller extends Controller
{
    public function index()
    {
        $dishes = Dish::all();

        $dishes_array = [];

        foreach ($dishes as $dish) {

            $dishes_array[] = [

                'id' => $dish->id,
               
                'name' => $dish->name,

                'cover' => $dish->cover,
       
            ];

            $result = [
                'dish' => $dishes_array,

                'success' => true
            ];
        }


       
        return response()->json($result);
    }
}
