<?php

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
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function(){

	Route::prefix('admin')->namespace('Admin')->group(function(){

		Route::prefix('restaurants')->group(function(){
			Route::get('/', 'RestaurantController@index')->name('restaurant.index');;
			Route::get('new', 'RestaurantController@new')->name('restaurant.new');
			Route::post('store', 'RestaurantController@store')->name('restaurant.store');
			Route::get('edit/{restaurant}', 'RestaurantController@edit')->name('restaurant.edit');
			Route::post('update/{id}', 'RestaurantController@update')->name('restaurant.update');
			Route::get('remove/{id}', 'RestaurantController@delete')->name('restaurant.remove');
		});

		Route::prefix('users')->group(function(){
			Route::get('/', 'UserController@index')->name('user.index');;
			Route::get('new', 'UserController@new')->name('user.new');
			Route::post('store', 'UserController@store')->name('user.store');
			Route::get('edit/{user}', 'UserController@edit')->name('user.edit');
			Route::post('update/{id}', 'UserController@update')->name('user.update');
			Route::get('remove/{id}', 'UserController@delete')->name('user.remove');
		});

	});
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
