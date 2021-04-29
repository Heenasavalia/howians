<?php
use App\Http\Middleware\CheckCompanyPlan;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('company')->user();

    //dd($users);

    return view('company.home');
})->name('home');

// Route::middleware([CheckCompanyPlan::class])->group(function () {
//     Route::get('/', function () {
//         //
//     });

    // Route::get('/profile', function () {
    //     //
    // })->withoutMiddleware([EnsureTokenIsValid::class]);
// });

Route::get('/dashboard', 'CompanyDashboardController@index');
Route::get('/plan-selection', 'CompanyDashboardController@PlanSelection');
Route::get('/plan-update/{plan_id}', 'CompanyDashboardController@PlanUpdate');

Route::get('change_password','CompanyDashboardController@update_password');
Route::post('change-password','CompanyDashboardController@changePassword');
Route::resource('job-requirement','CompanyJobRequirmentController');

//Route::get('job-list','CompanyJobRequirmentController@JobList');
//Route::any('getjoblist','CompanyJobRequirmentController@getjoblist');
//Route::get('view_user/{id}','CompanyJobRequirmentController@view_user');

Route::get('post-job-list','CompanyJobRequirmentController@JobUser');
Route::any('getjobuserlist','CompanyJobRequirmentController@getjobuserlist');

