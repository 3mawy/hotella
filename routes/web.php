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
Route::get('search', 'AutocompleteController@index');

Route::get('autocomplete', 'AutocompleteController@search')->name('autocomplete');
Route::get('test', function () {
    return view('test');});
Route::get('searchresult', 'SearchController@index');

