<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});


Route::prefix('admin')->group(function (){
    Route::get('info', function(){
        return view('admin.dashboard');
    });
});