<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Models\Item;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/foods/{category}', [HomeController::class,'foods'])->name('foods');
Route::get('/foods/details/{item}', [HomeController::class,'details'])->name('details');
Route::get('/logout', [authController::class, 'logout'])->name('logout');

Route::post('/login', [authController::class, 'login'])->name('signin');
Route::post('/register', [authController::class, 'register'])->name('signup');
Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    Route::get('/register', function () {
        return view('register');
    })->name('register');
});
