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


});



Route::any ( '/search', function () {
    $q = Input::get ( 'product_search' );
    $search = product::where('name','LIKE','%'.$q.'%')->get();
    if(count($search) > 0)
       return view('layout.pages.search')->withDetails($search)->withQuery ( $q );
    else
       return view ('layout.pages.search')->withMessage('No Details found. Try to search again !');
});

 
 

 
