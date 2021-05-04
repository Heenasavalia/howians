<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('user')->user();

    //dd($users);

    return view('user.home');
    // return view('user.landing');
})->name('home');

Route::get('/planselect', 'UserController@PlanSelection');
Route::get('/displayallplan', 'UserController@DiaplayPlans');
Route::post('/select_plan', 'UserController@selectPlans');
Route::any('/display-profile/{id}', 'UserController@profile');
Route::resource('/profile', 'UserController');

Route::post('/user-search','UserController@userSearch');
Route::get('change-password','UserController@UpdatePassword');
Route::put('change-password','UserController@changePassword');

Route::get('msg-send-mail/{id}','UserController@MailSendMessage');

// review ratting form
Route::any('review/{com}/{job}','UserController@ReviewForm');
Route::post('submit-rating','UserController@AddReview');

// apply for job


