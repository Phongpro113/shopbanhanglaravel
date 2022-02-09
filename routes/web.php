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

// Route::get('/', function () {
//     return view('layout');
// });

// Route::get('/trang-chu', function () {
//     return view('layout');
// });

// Route::get('/', 'HomeController@index');

// Route::get('/trang-chu', 'HomeController@index');


//frontend
Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index')->name('trang-chu');

//backend

Route::get('/admin', 'App\Http\Controllers\adminController@index')->name('admin');

Route::get('/dashboard', 'App\Http\Controllers\adminController@show_dashboard')->name('show_dashboard');

Route::post('/admin-dashboard', 'App\Http\Controllers\adminController@dashboard')->name('dashboard');

Route::get('/logout', 'App\Http\Controllers\adminController@logout')->name('logout');

//category

Route::get('/add-category-product', 'App\Http\Controllers\CategoryProduct@CategoryProduct')->name('add-category-product');

Route::get('/all-category-product', 'App\Http\Controllers\CategoryProduct@CategoryProduct')->name('all_category_product');