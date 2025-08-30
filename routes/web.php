<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard.index');
Route::get('/test', 'App\Http\Controllers\DashboardController@test')->name('dashboard.test');

Route::resource('posts', PostController::class);