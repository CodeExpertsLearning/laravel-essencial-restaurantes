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

//	$sql = 'SELECT * FROM users WHERE id = ?';
//	$users = \DB::select($sql, [4]);
//
//	$users = \DB::table('users')
//	            ->where('id', 4)
//		        ->select('id', 'name')
//	            ->get();
//
//	$users = \App\User::where('id', 4)
//		                ->select('id', 'name')
//	                    ->get();
//	dd($users);
//    $user = new \App\User();
//	$user = \App\User::find(31);
//
//    $user->name     = 'Nanderson Castro Edited';
//    $user->email    = 'nandokstro@gmail.com';
//    $user->password = bcrypt('123456');
//
//    $user->save();

//	$userData = [
//		'name' => 'Usuario Novo 2 Edited',
//	];

//	$user = new \App\User();
//	$user = \App\User::find(33);
//	$user->update($userData);

//	$user = \App\User::find(33);
//	$user->delete();

//	$user = \App\User::whereIn('id', [31, 30]);
//	$user->delete();
    return view('welcome', compact('users'));
});

Route::get('hello/{name}', function($name){
	return view('hello');
	//return redirect()->route('products_single');
});

////Users
//Route::get('/users', 'Test\UserController@index');
//Route::get('/users/{id}', 'Test\UserController@show');
//Route::post('/users', 'Test\UserController@save');
//Route::resource('/users', 'Test\UserController');
//Route::resource('/products', 'Test\ProductController');

Route::namespace('Test')->group(function(){
	Route::get('/users/{id}', 'UserController@show');
	Route::get('/prod', 'ProductController@index');
});

Route::prefix('products')->name('products_')->group(function(){

	Route::get('/ok', function(){
		return 'Produtos Index';
	})->name('index');

	Route::get('/1', function(){
		return 'Produtos 1';
	})->name('single');
});

Route::group(['middleware' => ['test']], function(){
	Route::get('middle', function() { return 'Middle'; });

	Route::get('middle/2', function() { return 'Middle 2'; });
});

Route::view('/view', 'view', ['name' => 'Nanderson'])->middleware('test');

Route::get('show/{name?}/{sobrenome?}', function($name = null, $sobrenome = null){
	if(is_null($name))
		return 'Informe um nome para exibição';

	return $name . ' ' . $sobrenome;
});