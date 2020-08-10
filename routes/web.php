<?php

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
Route::get('/home', function () {
    return view('vista_entrada');
    
});
Route::get('/extra', function (){
    return view('extra');
})->name("extra")->middleware('auth');
Route::get('/portafolio', function () {
   return view('portafolio'); 
})->name("portafolio")->middleware('auth');
Route::get('/about', function () {
    return view('about');
})->name("about");
Route::get('/principal', function () {
    return view('principal');
})->name("principal");


Auth::routes();


//Route::get('/home', 'HomeController@index')->name('home');
