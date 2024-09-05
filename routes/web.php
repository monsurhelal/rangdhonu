<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\SubCategoryController;
use Illuminate\Support\Facades\Route;






Route::group(['prefix' => 'admin'],function(){
    
    Route::get('login',[LoginController::class,'showloginpage'])->name('admin.showloginpage');

    Route::post('login',[LoginController::class,'login'])->name('admin.login');

    Route::get('/', function () {
        return view('backend.pages.dashboard');
    })->name('admin.dashboard');

    Route::get('logout',[LoginController::class,'logout'])->name('admin.logout');
    Route::resource('/category', CategoryController::class);
    Route::resource('/sub-category', SubCategoryController::class);
});