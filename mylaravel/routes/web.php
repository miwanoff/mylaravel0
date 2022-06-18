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

Route::get('/', 'App\Http\Controllers\MainController@home');
Route::get('/about', 'App\Http\Controllers\MainController@about');
Route::get('/review', 'App\Http\Controllers\MainController@review')->name('review');
Route::post('/review/check', 'App\Http\Controllers\MainController@review_check');
Route::get('/portfolio', 'App\Http\Controllers\MainController@portfolio')->name('portfolio');
Route::post('/portfolio/check', 'App\Http\Controllers\MainController@portfolio_check');

Route::get('/admin_dashboard', 'App\Http\Controllers\Admin\DashboardController@index')->middleware('role:admin');
Route::get('/subscriber_dashboard', 'App\Http\Controllers\Subscriber\DashboardController@index')->middleware('role:subscriber');

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     // return view('about');
//     return 'id:' . $id . ' name:' . $name;
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');