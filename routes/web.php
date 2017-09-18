<?php

use App\User;
use Kim\Activity\Activity;

Route::get('/', function () {
    $users = Activity::join('users', 'users.id', '=', 'sessions.user_id')->users(60)->get();
    return view('index', compact('users') );
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', 'UserController@profile');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/profile/{user}', function($id)
{
	$users = DB::table('users')->find($id);
    return view('profile.user', compact('users'));
});


Route::get('/', 'PostController@getPosts');
Route::post('/', 'PostController@createPost');


