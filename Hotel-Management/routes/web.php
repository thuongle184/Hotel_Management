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
})->name('home');


Route::resources([
  'dishes'                =>  'DishController',
  'dishTypes'             =>  'DishTypeController',
  'bookingPurposes'       =>  'BookingPurposeController',
  'roomSizes'             =>  'RoomSizeController',
  'rooms'                 =>  'RoomController',
  'userTypes'             =>  'UserTypeController',
  'equipment'             =>  'EquipmentController',
  'titles'                =>  'TitleController',
  'onlinePlateforms'      =>  'OnlinePlateformController',
  'identificationTypes'   =>  'IdentificationTypeController',
  'countries'             =>  'CountryController',
  'users'                 =>  'UserController',
  'companies'             =>  'CompanyController',
  'userCompanies'         =>  'UserCompanyController',
]);


Route::patch('dishes/{dish}/discard_picture', 'DishController@discardPicture')->name('dishes.discardPicture');

Route::get('login', 'LoginController@login')->name('login');
Route::post('login', 'LoginController@authenticate')->name('login.authenticate');
Route::get('logout', 'LoginController@logout')->name('login.logout');
