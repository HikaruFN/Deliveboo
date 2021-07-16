<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Type;
use App\User;

use Illuminate\Http\Request;

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
        $types = Type::all();
        $data = [
            'restaurants' => $restaurants,
            'types'=> $types
        ];

        return view('guest.home', $data);
    }
}
