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
    return redirect('NewWorld/index');
}); 


Route::get('Admin/Login/login', 'App\Http\Controllers\Admin\Auth\LoginController@index','Admin/Login/index')->name('home');
Route::post('Admin/Login/login', 'App\Http\Controllers\Admin\Auth\LoginController@login','Admin/Login/login')->name('authenciate');

Route::get('Admin/index','App\Http\Controllers\Admin\Homecontroller@index','Admin/index');

Route::resource('Admin/Products/index', 'App\Http\Controllers\Admin\Products\ProductController');
Route::get('Admin/Products/create', 'App\Http\Controllers\Admin\Products\ProductController@create');
Route::post('Admin/Products/store','App\Http\Controllers\Admin\Products\ProductController@store');
Route::get('Admin/Products/store','App\Http\Controllers\Admin\Products\ProductController@store');
Route::get('/Admin/Products/view/{id}','App\Http\Controllers\Admin\Products\ProductController@show');
Route::get('/Admin/Products/update/{id}','App\Http\Controllers\Admin\Products\ProductController@edit');
Route::post('/Admin/Products/update/{id}','App\Http\Controllers\Admin\Products\ProductController@update');
Route::get('/Admin/Products/delete','App\Http\Controllers\Admin\Products\ProductController@destroy');
Route::post('/Admin/Products/delete','App\Http\Controllers\Admin\Products\ProductController@destroy');
Route::get('/Admin/Product/getSubCateByID/{id}','App\Http\Controllers\Admin\Products\ProductController@getSubCateByID');



Route::resource('Admin/Category/index','App\Http\Controllers\Admin\Products\CategoryController');
Route::get('Admin/Category/create', 'App\Http\Controllers\Admin\Products\CategoryController@create');
Route::post('Admin/Category/store','App\Http\Controllers\Admin\Products\CategoryController@store');
Route::get('Admin/Category/store','App\Http\Controllers\Admin\Products\CategoryController@store');
Route::get('/Admin/Category/update/{id}','App\Http\Controllers\Admin\Products\CategoryController@edit');
Route::put('/Admin/Category/update/{id}','App\Http\Controllers\Admin\Products\CategoryController@update');
Route::get('/Admin/Category/destroy/{id}','App\Http\Controllers\Admin\Products\CategoryController@destroy');



Route::resource('Admin/SubCategory/index','App\Http\Controllers\Admin\Products\SubCategoryController');
Route::get('Admin/SubCategory/create', 'App\Http\Controllers\Admin\Products\SubCategoryController@create');
Route::post('Admin/SubCategory/store','App\Http\Controllers\Admin\Products\SubCategoryController@store');
Route::get('Admin/SubCategory/store','App\Http\Controllers\Admin\Products\SubCategoryController@store');




Route::get('Admin/Carousel/index','App\Http\Controllers\Admin\Carousel\carouselcontroller@index');
Route::get('Admin/Carousel/create','App\Http\Controllers\Admin\Carousel\carouselcontroller@create');
Route::post('Admin/Carousel/store','App\Http\Controllers\Admin\Carousel\carouselcontroller@store');
Route::get('Admin/Carousel/update/{id}','App\Http\Controllers\Admin\Carousel\carouselcontroller@edit');
Route::put('Admin/Carousel/update/{id}','App\Http\Controllers\Admin\Carousel\carouselcontroller@update');
Route::get('Admin/Carousel/destroy/{id}','App\Http\Controllers\Admin\Carousel\carouselcontroller@destroy');



Route::get('NewWorld/index','App\Http\Controllers\NewWorldController@index');
Route::get('NewWorld/about','App\Http\Controllers\NewWorldController@about');
Route::post('NewWorld/createUser','App\Http\Controllers\NewWorldController@createUser');
Route::get('NewWorld/createUser','App\Http\Controllers\NewWorldController@createUser');
Route::get('NewWorld/cart/{id}','App\Http\Controllers\NewWorldController@cart');
Route::get('NewWorld/details/{id}','App\Http\Controllers\NewWorldController@details');
Route::post('NewWorld/addDetails/{id}','App\Http\Controllers\NewWorldController@addDetails');
Route::get('NewWorld/subcategory/{id}/{sid}','App\Http\Controllers\NewWorldController@getLaptops');
Route::post('NewWorld/authUser','App\Http\Controllers\NewWorldController@authUser');
Route::get('NewWorld/destroy/{id}','App\Http\Controllers\NewWorldController@destroy');

Route::get('NewWorld/slide/{id}','App\Http\Controllers\NewWorldController@carousel');
Route::get('NewWorld/special/{id}','App\Http\Controllers\NewWorldController@cart');
Route::post('NewWorld/addSpecial/{id}','App\Http\Controllers\NewWorldController@addSpecial');




