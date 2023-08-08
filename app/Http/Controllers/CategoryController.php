<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories  = Category::query()->paginate(5);


        return view('admin.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = request()->validate([
            'name' => 'required|min:1',
            'img' => 'file',
        ]);

        if (request('img')) {

            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('images', $filename, 'uploads',);
            $inputs['img'] = '/images/' . $path;
        }
        Category::create([
            'name' => $inputs['name'],
            'image' => $inputs['img']
        ]);
        session()->flash('category-created-message', 'Category was created');

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

        $inputs = request()->validate([
            'name' => 'required|min:1',
            'img' => 'file',
        ]);
        if (request('img')) {

            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('images', $filename, 'uploads',);
            $category->image = '/images/' . $path;
        }
        $category->name = $inputs['name'];

        $category->save();


        session()->flash('category-updated-message', 'Category was updated');



        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        session()->flash('message', 'Category was deleted');


        return redirect()->route('category.index');
    }
}
