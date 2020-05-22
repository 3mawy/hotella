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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('autocomplete', 'AutocompleteController@search')->name('autocomplete');
Route::get('searchresults', function (){
    return view('search');
} /*'SearchController@index'*/);
Route::get('hotels/{$hotel}', function(){

    return view('hotel');
});
//Route::get('test',' AutocompleteController@search');
//Route::get('search', 'AutocompleteController@index');


