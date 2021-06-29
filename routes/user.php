<?php

// Route::get('/home', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('user')->user();

//     //dd($users);

//     return view('user.home');
//     // return view('user.landing');
// })->name('home');

Route::get('/home', 'UserController@index');
// Route::get('/home', 'UserController@welcome');

Route::get('/planselect', 'UserController@PlanSelection');
Route::get('/displayallplan', 'UserController@DiaplayPlans');
Route::post('/select_plan', 'UserController@selectPlans');
Route::any('/display-profile/{id}', 'UserController@profile');
Route::any('/profile-edit', 'UserController@profileEdit');
Route::resource('/profile', 'UserController');
Route::get('/company-profile/{id}', 'UserController@companyProfile');

Route::post('/user-search','UserController@userSearch');
Route::get('change-password','UserController@UpdatePassword');
Route::put('change-password','UserController@changePassword');

Route::get('msg-send-mail/{id}','UserController@MailSendMessage');

// job 
Route::any('/job','UserController@job');

// review ratting form
Route::any('review/{com}/{job}','UserController@ReviewForm');
Route::post('submit-rating','UserController@AddReview');

// apply for job
Route::get('apply-job/{company}/{job}','UserController@applyJob');
Route::post('submit-job-apply','UserController@applyJobForm');

//comment by heena 29-06-2021
Route::get('apply/{job_id}','UserController@jobDetails');