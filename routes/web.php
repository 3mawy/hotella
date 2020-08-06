<?php

use App\Destination;
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

Route::get('/', function () {return view('welcome');})->name('home');
Route::get('/home', function () {return view('welcome');})->name('home');

Auth::routes();

Route::get('profile', 'ProfileController@show')->name('profile.show');
Route::get('autocomplete', 'AutocompleteController@search')->name('autocomplete');
Route::get('search-results', 'SearchController@index')->name('search.index');
Route::get('search-results/{hotel}', 'SearchController@show')->name('search.show');
Route::get('hotels', 'HotelController@index')->name('hotel.index');
Route::get('hotels/{hotel}', 'HotelController@show')->name('hotel.show');
Route::get('contacts/create', 'ContactController@create')->name('contacts.create');
Route::post('contacts', 'ContactController@store')->name('contacts.store');
/*Route::get('/{any}','HotelTabsController@index')->where(' any', '.*');*/
//Route::get('test',' AutocompleteController@search');
//Route::get('search', 'AutocompleteController@index');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
