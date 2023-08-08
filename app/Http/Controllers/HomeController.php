<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $categories = Category::query()->paginate(6);
        return view('home', compact('categories'));
    }
    public function foods(Request $request, Category $category)
    {
        $items = Item::query()->where('category_id',$category->id)->paginate(6);
        return view('foods', compact('items'));
    }
    public function details(Request $request, Item $item)
    {
        return view('details', compact('item'));
    }
}
