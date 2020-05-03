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

route::get('/', 'FrontEndController@index');

route::get('/pemuda', 'IndexController@pemuda');
// route::group(['prefix' => 'pemuda', 'middleware' => ['auth', 'activated', 'role:admin', 'activity', 'twostep', 'checkblocked']], function(){

// ]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
