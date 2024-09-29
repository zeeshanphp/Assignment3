<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::resource('/blogs', BlogsController::class)->middleware('auth:sanctum');
Route::resource('/users', UserController::class);
Route::post('/login', [LoginController::class, "login"])->name('login');
Route::get('/logout', [LoginController::class, "logout"])->middleware('auth:sanctum');
