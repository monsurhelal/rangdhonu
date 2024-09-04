<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\LoginController;
use Illuminate\Support\Facades\Route;



Route::get('login',[LoginController::class,'showloginpage']);
Route::post('login',[LoginController::class,'login'])->name('admin.login');


Route::group(['prefix' => 'admin'],function(){

    Route::get('/', function () {
        return view('backend.pages.dashboard');
    })->name('admin.dashboard');

    Route::resource('/category', CategoryController::class);
});