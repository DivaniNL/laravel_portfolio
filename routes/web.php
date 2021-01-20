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


Route::get('/contact', 'App\Http\Controllers\ContactController@index');
Route::post('/contact/{name?}', 'App\Http\Controllers\ContactController@ContactRequest');
Route::get('/about', function () {
    return view('about');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/home2', function () {
    return view('home2');
});
Route::get('/overons', function () {
    return view('overons');
});

Route::get('werken/test', function () {
    return view('werken.test');
});
Route::get('/werken/users', function () {
    return view('werken/users');
 });
Route::resource('werken', 'App\Http\Controllers\WerkController');

Route::resource('dashboard', 'App\Http\Controllers\TestController');

Route::get('/', function () {
    return redirect('home');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('login', 'App\Http\Controllers\AuthController@index');

Route::post('post-login', 'App\Http\Controllers\AuthController@postLogin');
Route::get('registration', 'App\Http\Controllers\AuthController@registration');
Route::post('post-registration', 'App\Http\Controllers\AuthController@postRegistration');


Route::get('logout', 'App\Http\Controllers\AuthController@logout');

