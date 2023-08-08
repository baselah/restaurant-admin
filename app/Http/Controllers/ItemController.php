<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::query()->paginate(5);


        return view('admin.Item.index', ['items' => $items]);

        //return view ('home',compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories  = Category::all();
        $ingredients = Ingredient::all();
        return view('admin.Item.create', compact('categories', 'ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $inputs = request()->validate([
            'name' => 'required|min:1',
            'details' => 'required',
            'category_id' => 'required',
            'img' => 'file',
        ]);

        if (request('img')) {

            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('images', $filename, 'uploads',);
            $inputs['img'] = '/images/' . $path;
        }
        $item =  Item::create([
            'name' => $inputs['name'],
            'image' => $inputs['img'],
            'details' => $inputs['details'],
            'category_id' => $inputs['category_id']
        ]);

        $selectedIngredients = $request->input('ingredients', []);

        $item->ingredient()->syncWithoutDetaching($selectedIngredients);
        session()->flash('item-created-message', 'Item was created');

        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {

        $categories  = Category::all();
        $ingredients = Ingredient::all();

        return view('admin.Item.edit', ['item' => $item, 'categories' => $categories, 'ingredients' => $ingredients]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $inputs = request()->validate([
            'name' => 'required|min:1',
            'details' => 'required',
            'category_id' => 'required',
            'img' => 'file',
        ]);

        if (request('img')) {

            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('images', $filename, 'uploads',);
            $item->image = '/images/' . $path;
        }
        $item->name = $inputs['name'];
        $item->details = $inputs['details'];
        $item->category_id = $inputs['category_id'];

        $selectedIngredients = $request->input('ingredients', []);

        $item->ingredient()->detach();
        $item->ingredient()->syncWithoutDetaching($selectedIngredients);

        $item->save();

        session()->flash('item-updated-message', 'Item was updated');

        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();

        session()->flash('message', 'Item was deleted');


        return redirect()->route('item.index');
    }
}
