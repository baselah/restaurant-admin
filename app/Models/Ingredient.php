<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function item()
    {
        return $this->belongsToMany(Item::class, 'item_ngredient', 'ingredient_id', 'item_id');
    }
}
