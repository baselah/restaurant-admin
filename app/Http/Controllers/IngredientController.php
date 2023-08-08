<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredients = Ingredient::query()->paginate(5);


        return view('admin.ingredient.index', ['ingredients' => $ingredients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ingredient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = request()->validate([
            'name' => 'required|min:1',
        ]);

        Ingredient::create([
            'name' => $inputs['name'],
        ]);
        session()->flash('ingredient-created-message', 'Ingredient was created');

        return redirect()->route('ingredient.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingredient $ingredient)
    {
        return view('admin.ingredient.edit', ['ingredient' => $ingredient]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        $inputs = request()->validate([
            'name' => 'required|min:1',
        ]);

        $ingredient->name = $inputs['name'];
        $ingredient->save();
        session()->flash('ingredient-updated-message', 'Ingredient was updated');

        return redirect()->route('ingredient.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();

        session()->flash('message', 'Ingredient was deleted');


        return redirect()->route('ingredient.index');
    }
}
