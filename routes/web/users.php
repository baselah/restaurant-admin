<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('admin/users',[UserController::class,'index'])->name('users.index');

Route::put('/users/{user}/update',[UserController::class,'update'])->name('user.profile.update');
Route::delete('/users/{user}/destroy',[UserController::class,'destroy'])->name('user.destroy');

Route::middleware(['auth','can:view,user'])->group(function(){
    Route::get('/users/{user}/profile',[UserController::class,'show'])->name('user.profile.show');
});
Route::put('/users/{user}/attach',[UserController::class,'attach'])->name('user.role.attach');
Route::put('/users/{user}/detach',[UserController::class,'detach'])->name('user.role.detach');



?>
