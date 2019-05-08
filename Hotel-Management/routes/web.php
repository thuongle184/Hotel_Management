<?php
use App\product;
use Illuminate\Support\Facades\Input;
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

  
   
	Route::get('homeadmin', [
		'as'=> 'homeadmin',
		'uses'=>'PageController@getadmin'
	]);

    
    Route::get('trangchu', [
        'as'    => 'trangchu',
        'uses'  => 'PageController@getTrangchu'
    ]);
    Route::get('about', [
        'as'    => 'about',
        'uses'  => 'PageController@getAbout'
    ]);
    Route::get('service', [
        'as'    => 'service',
        'uses'  => 'PageController@getService'
    ]);
    Route::get('contact', [
        'as'    => 'contact',
        'uses'  => 'PageController@getContact'
    ]);
    Route::get('room', [
        'as'    => 'room',
        'uses'  => 'PageController@getRoom'
    ]);
    Route::get('new', [
        'as'    => 'new',
        'uses'  => 'PageController@getNew'
    ]);
    Route::get('element', [
        'as'    => 'element',
        'uses'  => 'PageController@getElement'
    ]); 

    // User type  
    
    Route::get('addUserType', [
        'as'    => 'addUserType',
        'uses'  => 'UserTypeController@addUserType'
    ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
    Route::post('addUserType', [
        'as'    => 'postAddUserType',
        'uses'  => 'UserTypeController@postUserType'
    ]);
 
    Route::get('listUserType', [
        'as'    => 'listUserType',
        'uses'  => 'UserTypeController@getlistUserType'
    ]);
     
    Route::get('deleteUserType/{id}', [
        'as'    => 'getdeleteUserType',
        'uses'  => 'UserTypeController@deleteUserType'
    ]);
     
    Route::get('editUserType/{id}', [
        'as'    => 'editUserType',
        'uses'  => 'UserTypeController@getEditUserType'
    ]);
    Route::post('editUserType/{id}', [
        'as'    => 'postEditUserType',
        'uses'  => 'UserTypeController@postEditUserType'
    ]);

    
});



Route::any ( '/search', function () {
    $q = Input::get ( 'product_search' );
    $search = product::where('name','LIKE','%'.$q.'%')->get();
    if(count($search) > 0)
     return view('layout.pages.search')->withDetails($search)->withQuery ( $q );
 else
     return view ('layout.pages.search')->withMessage('No Details found. Try to search again !');
});




