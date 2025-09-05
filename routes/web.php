<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/register', 'App\Http\Controllers\RegisterController@index')->name('auth.get-register');
Route::post('/register', 'App\Http\Controllers\RegisterController@register')->name('auth.post-register');

Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\LoginController@login')->name('auth.post-login');

Route::group(['middleware' => ['auth']], function() {
	// Dashboard
	Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard.index');

	// Logout
	Route::get('/logout', 'App\Http\Controllers\LogoutController@index')->name('auth.logout');

	// Profile
	Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile.index');
	Route::post('/profile', 'App\Http\Controllers\ProfileController@update')->name('profile.update');
});


Route::resource('posts', PostController::class);