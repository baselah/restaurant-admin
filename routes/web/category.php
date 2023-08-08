<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;


Route::get('/category/{category}', 'App\Http\Controllers\CategoryController@show')->name('category');
Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
Route::get('/category/index', [CategoryController::class,'index'])->name('category.index');
Route::post('/category', [CategoryController::class,'store'])->name('category.store');
Route::delete('/category/{category}/delete', [CategoryController::class,'destroy'])->name('category.destroy');
Route::get('/category/{category}/edit', [CategoryController::class,'edit'])->name('category.edit');
Route::patch('/category/{category}/update', [CategoryController::class,'update'])->name('category.update');
