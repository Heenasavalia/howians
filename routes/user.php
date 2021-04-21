<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('user')->user();

    //dd($users);

    return view('user.home');
})->name('home');

Route::get('/planselect', 'UserController@PlanSelection');
Route::get('/displayallplan', 'UserController@DiaplayPlans');
Route::post('/select_plan', 'UserController@selectPlans');
Route::any('/profile', 'UserController@profile');
Route::resource('/user', 'UserController');
