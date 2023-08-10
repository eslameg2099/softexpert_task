<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group and "App\Http\Controllers\Api" namespace.
| and "api." route's alias name. Enjoy building your API!
|
*/


/*  The routes of generated crud will set here: Don't remove this line  */

Route::post('/login', 'LoginController@login');


Route::group(['middleware' => ['jwt.verify','check.admin']], function() {

    Route::resource('entities', 'EntityController');
    Route::resource('attributes', 'AttributeController');
    Route::resource('supervisors', 'SupervisorController');
});

Route::group(['middleware' => ['jwt.verify']], function() {

  Route::resource('entitiessupervisor', 'EntitySupervisorController');
  Route::resource('objects', 'ObjectController');
});