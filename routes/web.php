<?php

use App\Http\Controllers\backend\CategoryController;
use Illuminate\Support\Facades\Route;




Route::group(['prefix' => 'admin'],function(){
    Route::get('/', function () {
        return view('backend.pages.dashboard');
    });

    Route::resource('category', CategoryController::class);
});