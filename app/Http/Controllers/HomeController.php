<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $restaurants = User::all();

        $data = [
            'restaurants' => $restaurants
        ];

        return view('guest.home', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);

        $data = [
            'restaurant' => $restaurant,
            'dishes' => $restaurant->dishes
        ];

        return view('guest.menu', $data);
    }
}
