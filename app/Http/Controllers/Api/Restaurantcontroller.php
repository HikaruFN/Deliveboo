<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class Restaurantcontroller extends Controller
{
    public function index()
    {
        $restaurants = User::all();

        $filtered_array = [];

        foreach ($restaurants as $restaurant) {

           $filtered_array[] = [
               
               'name' => $restaurant->name,

               'mail' => $restaurant->email,

               'net_number' => $restaurant->net_number,

               'address' => $restaurant->address,

               'cover' => $restaurant->cover,

           ];

           $result = [
               'restaurant' => $filtered_array,

               'success' => true
           ];
        }


       
        return response()->json($result);
    }
}
