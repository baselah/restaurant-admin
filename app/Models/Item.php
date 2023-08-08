<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;



    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function ingredient()
    {
        return $this->belongsToMany(Ingredient::class, 'item_ingredients', 'item_id', 'ingredient_id');
    }
}
