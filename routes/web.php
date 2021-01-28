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

Route::get('/corso', function() {
  return view('corso');
})->name('corso');

Route::get('/dopo_il_corso', function() {
  return view('dopo_corso');
})->name('dopo_il_corso');

Route::get('/camp_gratuito', function() {
  return view('camp_free');
})->name('camp_gratuito');

Route::get('/utente', 'UserController@index')->name('utente');

Route::get('/utente/{id}', 'UserController@show')->name('dettagli_user.show');
