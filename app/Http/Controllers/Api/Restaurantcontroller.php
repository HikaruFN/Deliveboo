<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Type;

class Restaurantcontroller extends Controller
{
    public function index()
    {
        $restaurants = User::all();
        $filtered_array = [];
        foreach ($restaurants as $restaurant) {
            $filtered_array[] = [
                'id' => $restaurant->id,
                'name' => $restaurant->name,
                'mail' => $restaurant->email,
                'net_number' => $restaurant->net_number,
                'address' => $restaurant->address,
                'cover' => $restaurant->cover,
                'type' => $restaurant->types->toArray()
            ];
            $result = [
                'restaurant' => $filtered_array,
                'success' => true
            ];
        }
        return response()->json($result);
    }
    public function restaurantForId($id)
    {
    $restaurants = User::all();
    $restaurantForId = [];
    foreach ($restaurants as $restaurant) {
        if($restaurant->id == $id){
            $restaurantForId[] = [
                'id' => $restaurant->id,
            
            'name' => $restaurant->name,
            'mail' => $restaurant->email,
            'net_number' => $restaurant->net_number,
            'address' => $restaurant->address,
            'cover' => $restaurant->cover,
            ];
            $result = [
                'restaurant' => $restaurantForId,
                'success' => true
            ];
        }
    }     
    return response()->json($result);
        return response()->json($result);
    }
}
