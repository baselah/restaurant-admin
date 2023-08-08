<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware('auth')->group(function(){
    Route::get('/admin',[AdminsController::class,'index'])->name('admin.index');

});
Route::get('admin/users',[UserController::class,'index'])->name('users.index');

Route::middleware(['auth','can:view,user'])->group(function(){
    Route::get('/admin/users/{user}/profile',[UserController::class,'show'])->name('user.profile.show');
});
