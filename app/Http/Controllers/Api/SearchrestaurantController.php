<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class SearchrestaurantController extends Controller
{
    public function searchRestaurants($type)
    {
        $restaurants = User::all();

        // Creating an array to store all filtered restaurants by type
        $filtered_restaurants = [];
        
        // Looping through all restaurants and taking all info of each one
        foreach ($restaurants as $restaurant) {
            if ($restaurant->types) {
                foreach ($restaurant->types as $restaurant_type) {
                    if ($restaurant_type->id == $type) {
                        $filtered_restaurants[] = $restaurant;
                    }

                }

            }
        }

        $result = [
            'restaurants' => $filtered_restaurants,
            'success' => true
        ];

        return response()->json($result);
    }
}
