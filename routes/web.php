<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ---------------frontend route-------------



Route::get('/','App\Http\Controllers\FrontendController@Index')->name('index')->middleware('views');
//registration route
Route::get('/registration','App\Http\Controllers\FrontendController@SignUp')->name('signup');
Route::post('/register-users','App\Http\Controllers\FrontendController@RegisterUsers')->name('register-users');

Route::get('/success','App\Http\Controllers\FrontendController@Success')->name('success');

// login route
Route::get('/signin','App\Http\Controllers\FrontendController@Login')->name('signin');
Route::post('/login_logic','App\Http\Controllers\FrontendController@LoginLogic')->name('login_logic');
Route::get('/view-ticket','App\Http\Controllers\FrontendController@ViewTicket')->name('view-ticket');
Route::get('/download-ticket','App\Http\Controllers\FrontendController@generatePDF')->name('download-ticket');





// Route::get('/OTP','App\Http\Controllers\FrontendController@OTP')->name('otp-page');
// Route::post('/verify-otp','App\Http\Controllers\FrontendController@VerifyOTP')->name('verify-otp');
// Route::get('/resend-otp','App\Http\Controllers\FrontendController@ResendOTP')->name('resend-otp');


// Route::get('/stream-page','App\Http\Controllers\FrontendController@StreamPage')->name('stream-page');
// Route::get('/live-concert','App\Http\Controllers\FrontendController@LiveConcert')->name('live-concert');

// Route::get('/signin','App\Http\Controllers\FrontendController@login')->name('signin');
// Route::post('/login_logic','App\Http\Controllers\FrontendController@login_logic')->name('login_logic');

// Route::get('/test','App\Http\Controllers\FrontendController@test')->name('test');






// ----------------------------- admin route --------------

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/total-views',[App\Http\Controllers\HomeController::class, 'TotalViews'])->name('total-views');
Route::post('/edit_settings',[App\Http\Controllers\HomeController::class, 'EditSetting'])->name('edit-settings');


// ------------------------- for download csv file ---------------------
//  ------- for download payment completed data --------------
Route::get('/generate-csv',[App\Http\Controllers\HomeController::class, 'generateCSV'])->name('generate.csv');