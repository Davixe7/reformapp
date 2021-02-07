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

Route::get('/', 'App\Http\Controllers\ProjectController@index');


Route::get('profile', 'App\Http\Controllers\ProfileController@index')->name('profile');
Route::put('profile', 'App\Http\Controllers\ProfileController@update')->name('profile.update');

Route::get('accounts', 'App\Http\Controllers\UserController@edit')->name('accounts');
Route::put('accounts', 'App\Http\Controllers\UserController@update')->name('accounts.update');

Route::get('subscriptions', 'App\Http\Controllers\MembershipController@index')->name('subscriptions.index');

Route::resource('projects', 'App\Http\Controllers\ProjectController');