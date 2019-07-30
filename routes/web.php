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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProductController@index');
Route::get('/create', 'ProductController@create');
Route::post('/create', 'ProductController@store');
Route::get('/productshow/{product}', 'ProductController@show');
Route::get('/user', 'UserController@show');
// <<<<<<< HEAD
// =======
// Route::get('/search/{search?}', 'ProductController@search');
// >>>>>>> 327af0bfe3cb6b06ca428e03357f502294eb73e2

Route::get('/diet/{diet}', 'DietController@show');

Route::get('/attribute/{attribute}', 'AttributeController@show');

Route::get('/category/{category}', 'CategoryController@show');

Route::get('/createAt', 'AttributeController@create');
Route::post('/createAt', 'AttributeController@store');

Route::get('/createDiet', 'DietController@create');
Route::post('/createDiet', 'DietController@store');

Route::get('/createCat', 'CategoryController@create');
Route::post('/createCat', 'CategoryController@store');

Route::get('/cart', 'CartController@show')->middleware('auth');
Route::post('/cart/{id}', 'CartController@update');
Route::delete('/cart/{id}', 'CartController@destroy');

Route::get('/product/addtocart/{id}', 'CartController@store')->middleware('auth');
