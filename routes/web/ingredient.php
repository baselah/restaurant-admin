<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngredientController;


Route::get('/ingredient/{ingredient}', 'App\Http\Controllers\IngredientController@show')->name('ingredient');
Route::get('/ingredient/create', [IngredientController::class,'create'])->name('ingredient.create');
Route::get('/ingredient/index', [IngredientController::class,'index'])->name('ingredient.index');
Route::post('/ingredient', [IngredientController::class,'store'])->name('ingredient.store');
Route::delete('/ingredient/{ingredient}/delete', [IngredientController::class,'destroy'])->name('ingredient.destroy');
Route::get('/ingredient/{ingredient}/edit', [IngredientController::class,'edit'])->name('ingredient.edit');
Route::patch('/ingredient/{ingredient}/update', [IngredientController::class,'update'])->name('ingredient.update');
