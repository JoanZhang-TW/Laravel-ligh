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
    return view('frontend.index');
});


Route::get('light1', function () {

    $product = DB::table('products')->get();

    return view('frontend.light1', ['product' => $product]);
})->name('light1');

Route::get('map', function () {

    return view('frontend.map');
})->name('map');

Route::get('carousel', function () {
    return view('frontend.carousel');
})->name('carousel');

Route::get('/product', 'ProductController@lightUpload');

Route::post('/product', 'ProductController@store')->name('addimage');

Route::get('/productpage', 'ProductController@display');

Route::get('/editimage/{id}', 'ProductController@edit');

Route::get('/productdetail/{id}', 'ProductController@productdetail');

Route::put('/updateimage/{id}', 'ProductController@update');

Route::get('/productdelete/{id}', 'ProductController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});


