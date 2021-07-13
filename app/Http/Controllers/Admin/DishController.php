<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dish;
use App\Category;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::all();

        $data = [
            'dishes' => $dishes
        ];

        return view('admin.dishes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        
        $data = [
            'categories' => $categories,
            'user_id' => auth()->id
            
        ]; 

        return view('admin.dishes.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->getValidationRules());

        $new_dish_data = $request->all();
        
        $new_dish = new Dish();

        $new_dish->user_id=auth()->id();

        $new_dish->fill($new_dish_data);

        $new_dish->save();

        

        return redirect()->route('admin.dishes.show', ['dish' => $new_dish->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dish = Dish::findOrFail($id);

        $data = [
            'dish' => $dish,
            'dish_category' => $dish->category
            
        ];

        return view('admin.dishes.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Funzione che ritorna le regole di validazione
    private function getValidationRules() {
        $validation_rules = [
            'name' => 'required|max:255',
            'description' => 'required|max:60000',
            'price' => 'required|max:8',
            'visibility' => 'required|boolean',
            'category_id' => 'nullable|exists:categories,id',
            'user_id' => 'exists:user,id'
            
        ];

        return $validation_rules;
    }
}
