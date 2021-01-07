<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController as ContactController;

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', 'App\Http\Controllers\ContactController@index');
Route::post('/contact/send', 'App\Http\Controllers\ContactController@ContactRequest');
Route::get('/about', function () {
    return view('about');
});
Route::get('/work', function () {
    return view('work');
});
Route::get('/overons', function () {
    return view('overons');
});
Route::resource('werken', 'App\Http\Controllers\WerkController');
