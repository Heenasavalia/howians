<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('company')->user();

    //dd($users);

    return view('company.home');
})->name('home');

Route::get('/dashboard', 'CompanyDashboardController@index');
Route::get('/plan-selection', 'CompanyDashboardController@PlanSelection');
Route::get('/plan-update/{plan_id}', 'CompanyDashboardController@PlanUpdate');

Route::get('change_password','CompanyDashboardController@update_password');
Route::post('change-password','CompanyDashboardController@changePassword');
