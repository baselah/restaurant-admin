<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


Route::get('/item/{item}', 'App\Http\Controllers\itemController@show')->name('item');
Route::get('/item/create', [ItemController::class,'create'])->name('item.create');
Route::get('/item/index', [ItemController::class,'index'])->name('item.index');
Route::post('/item', [ItemController::class,'store'])->name('item.store');
Route::delete('/item/{item}/delete', [ItemController::class,'destroy'])->name('item.destroy');
Route::get('/item/{item}/edit', [ItemController::class,'edit'])->name('item.edit');
Route::patch('/item/{item}/update', [ItemController::class,'update'])->name('item.update');

?>
