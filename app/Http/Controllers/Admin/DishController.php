<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dish;
//commento prova
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Auth::user()->dishes;

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
            'categories' => $categories
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

        // Aggiungo immagine
        if (isset($new_dish_data['cover-image'])) {
            $img_path = Storage::put('cover', $new_dish_data['cover-image']);

            if ($img_path) {
                $new_dish_data['cover'] = $img_path;
            }
        }
        
        $new_dish = new Dish();

        // Serve per validare user_id
        $new_dish->user_id=auth()->id();

        $new_dish->fill($new_dish_data);

        // dd($new_dish);

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
        $dish = Dish::findOrFail($id);
        $categories = Category::all();

        $data = [
            'dish' => $dish,
            'categories' => $categories
        ];

        return view('admin.dishes.edit', $data);
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
        $request->validate($this->getValidationRules());

        $modified_dish_data = $request->all();

        $dish = Dish::findOrFail($id);

        $dish->update($modified_dish_data);

        return redirect()-> route('admin.dishes.show', ['dish' => $dish->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dish_to_delete = Dish::find($id);

        $dish_to_delete->delete();

        return redirect()->route('admin.dishes.index');
    }

    // Funzione che ritorna le regole di validazione
    private function getValidationRules() {
        $validation_rules = [
            'name' => 'required|max:255',
            'description' => 'nullable|max:60000',
            'price' => 'required|numeric',
            'visibility' => 'required|boolean',
            'category_id' => 'nullable|exists:categories,id',
            'user_id' => 'exists:user,id',
            'cover' => 'nullable'
        ];

        return $validation_rules;
    }
}
