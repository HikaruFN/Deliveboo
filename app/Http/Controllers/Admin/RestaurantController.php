<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/* use App\Type; */
use App\User;
use App\Order;
use App\Dish;
use Illuminate\Support\Facades\Auth;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant = Auth::user();
        $data = [
            'restaurant' => $restaurant,
            'id' => $restaurant->id
            /* 'types' => $restaurant->types */
        ];
        return view('admin.restaurants.index', $data);
    }

    public function show($id)
    {
        $restaurant = User::findOrFail($id);
        $data = [
            'restaurant' => $restaurant, 
        ];
        

        return view('admin.restaurants.graph', $data);
    }
}