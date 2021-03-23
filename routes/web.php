<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

Auth::routes();

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::resource('/blog', PostsController::class);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
