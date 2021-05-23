<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});
Route::get('auth/facebook', [App\Http\Controllers\SocialController::class, 'facebookRedirect']);

Route::get('auth/facebook/callback', [App\Http\Controllers\SocialController::class, 'loginWithFacebook']);

Route::get('auth/google',[App\Http\Controllers\SocialController::class, 'redirectGoogle'] );
Route::get('auth/google/callback', [App\Http\Controllers\SocialController::class, 'callbackGoogle']);



// Route::group(['prefix'=>'login'], function(){
//     //Social login route
//     Route::get('facebook', ['as' => 'facebook_redirect', 'uses'=>'SocialLogin@redirectFacebook']);
//     Route::get('facebook-callback', ['as' => 'facebook_callback', 'uses'=>'SocialLogin@callbackFacebook']);

//     Route::get('google', ['as' => 'google_redirect', 'uses'=>'SocialLogin@redirectGoogle']);
//     Route::get('google-callback', ['as' => 'google_callback', 'uses'=>'SocialLogin@callbackGoogle']);

//     Route::get('twitter', ['as' => 'twitter_redirect', 'uses'=>'SocialLogin@redirectTwitter']);
//     Route::get('twitter-callback', ['as' => 'twitter_callback', 'uses'=>'SocialLogin@callbackTwitter']);
// });


Route::group(['prefix' => LaravelLocalization::setLocale()], function(){
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/contact_Us', [App\Http\Controllers\HomeController::class, 'contact_Us'])->name('contact_Us');
Route::get('/payment/{id}', [App\Http\Controllers\HomeController::class, 'payment'])->name('payment');
Route::get('/project/{id}', [App\Http\Controllers\HomeController::class, 'project'])->name('project');

Route::post('payment/order', [App\Http\Controllers\HomeController::class, 'order'])->name('order');

Route::post('payment/cities_by_country_id', [App\Http\Controllers\HomeController::class, 'cities_by_country_id'])->name('cities_by_country_id');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
