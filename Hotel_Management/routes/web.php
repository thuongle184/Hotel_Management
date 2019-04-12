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



Route::group(['prefix' => 'backend/'], function () {

	Route::get('trangchu', [
		'as'  =>'trang-chu',
		'uses'=>'PageController@gettrangchu'	
	]);

	Route::get('loai', [
		'as'=> 'loaisanpham',
		'uses'=>'PageController@getloaiSP'
	]);

	Route::get('chitiet', [
		'as'=> 'loaisanpham',
		'uses'=>'PageController@getChitiet'
	]);

	Route::get('lienhe', [
		'as'=> 'loaisanpham',
		'uses'=>'PageController@getLH'
	]);

	Route::get('about', [
		'as'=> 'loaisanpham',
		'uses'=>'PageController@getAbout'
	]);

	Route::get('list', [
		'as'=> 'loaisanpham',
		'uses'=>'PageController@getList'
	]);

	Route::get('master', [
		'as'=> 'loaisanpham',
		'uses'=>'PageController@master'
	]);
});
