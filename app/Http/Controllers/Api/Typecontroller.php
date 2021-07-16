<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Type;

class Typecontroller extends Controller
{
    public function index()
    {
        $types = Type::all();

        $types_array = [];

        foreach ($types as $type) {

            $types_array[] = [
                
                'name' => $type->name,
 
            ];
 
            $result = [
                'type' => $types_array,
 
                'success' => true
            ];
         }

       
        return response()->json($result);
    }
}
