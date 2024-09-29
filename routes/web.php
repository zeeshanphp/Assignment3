<?php

use App\Http\Controllers\BlogsController;
use Illuminate\Support\Facades\Route;
use Jenssegers\Mongodb\Facades\Mongodb;



// Route::get('/', function () {});

Route::resource('blogs', BlogsController::class);
Route::get('/login', function () {
    return "login";
});
