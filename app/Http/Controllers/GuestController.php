<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Type;
use Illuminate\Support\Str;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'type' => 'nullable|exists:tags,id'
        ]);
        //richiesta dati form
        $form_data = $request->all();

        //slug
        $new_slug = Str::slug($form_data['name'], '-');
        $base_slug = $new_slug;
        $user_w_slug = User::where('slug','=',$new_slug)->first();
        $counter = 1;

        // nuovo slug
        while ($user_w_slug){
            $new_slug = $base_slug . '-' . $counter;
            $counter++;
            $user_w_slug = User::where('slug','=',$new_slug)->first();
        }

        $form_data['slug'] = $new_slug;

        if(isset($form_data['type']) && is_array($form_data['type'])) {
            $new_dish->type()->sync($form_data['type']);
        }

        // Salvataggio slug
        $new_user = new User();
        $new_user->fill($form_data);
        $new_user->save();

        return redirect()->route('admin.restaurants.show', ['user' => $new_user->slug]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
