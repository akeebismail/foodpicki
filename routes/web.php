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
    return view('home');
});
Route::get('test',function (){
    return \Illuminate\Support\Facades\Hash::make('adminthings');
});
Route::get('logout','Auth\LoginController@logout');
Route::get('admin/login','Auth\AdminLoginController@showLoginForm');
Route::post('admin/login','Auth\LoginController@login')->name('admin.login');
Route::get('admin/logout','Auth\AdminLoginController@logout')->name('admin.logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'admin','as'=>'admin.','role'=>'admin'], function () {
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard');
    Route::resource('category', 'Admin\CategoryController');
    Route::resource('menufood', 'Admin\MenuFoodController');
    Route::resource('address', 'Admin\AddressController');
    Route::resource('order', 'Admin\OrderController');
});
Route::get('category','CategoryController@index')->name('category');
Route::get('category/{slug}','CategoryController@show')->name('category.name');
Route::get('category/{id}','CategoryController@showIn')->name('category.id');
Route::get('foodmenu','ProductController@index')->name('foodmenu');
Route::get('foodmenu/{slug}','ProductController@show')->name('foodmenu.name');
Route::get('foodmenu/{id}','ProductController@showId')->name('foodmenu.id');

Route::resource('cart','CartController');
