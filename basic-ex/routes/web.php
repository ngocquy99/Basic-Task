<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    // Route::post('/register-2', 'RegisterController@register')->name('register.perform');


    Route::group([' ' => ['guest']], function () {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function () {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * Update Route
         */
        // Route::get('/update', 'UpdateController@update')->name('update.show');
        Route::get('/update', 'UpdateController@show')->name('update.show');
        Route::post('/update', 'UpdateController@update')->name('update.preform');

        /**
         * User table Route
         */
        Route::get('/table', 'UsertableController@table')->name('table.show');
    });

    Route::get('/tabel/search', 'SearchController@search')->name('users.search');

    // Route::get('users', function () {
    //     $users = DB::table('users')->simplePaginate(15);
    //     $users->setPath('page');
    // });
    
});
