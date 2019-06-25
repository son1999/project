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
    return view('client.pages.index');
});

Route::get('getproducttype','AjaxController@getProductType');
Route::group(['prefix' => 'dashboard'],function(){
	// Route::any('','AdminController@index')->name('admin');
    Route::resource('category','CategoryController');
    Route::resource('producttype', 'ProductTypeController');
    Route::resource('product', 'ProductController');
    Route::post('updatePro/{id}','ProductController@update');
});

Route::get('callback/{social}','HomeController@handleProviderCallback');
Route::get('login/{social}','HomeController@redirectToProvider')->name('login.social');

