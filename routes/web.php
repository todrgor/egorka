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

Route::get ('/', 'ApiController@indexAction' );
Route::get ('/index', 'ApiController@indexAction' );

Route::get ('/test', 'ApiController@testAction' );

Route::get ('/korzina', 'ApiController@korzinaAction' );

Route::get ('/nastroyki', 'ApiController@nastroykiAction' );

Route::get ('/poisk', 'ApiController@poiskAction' );

Route::get ('/poleznoe', 'ApiController@poleznoeAction' );

Route::get ('/pro_nas', 'ApiController@pro_nasAction' );

Route::get ('/pro_nas-konstitucia', 'ApiController@pro_nas_konstituciaAction' );

Route::get ('/pro_nas-sostav', 'ApiController@pro_nas_sostavAction' );

Route::get ('/pro_nas-svyaz', 'ApiController@pro_nas_svyazAction' );

Route::get ('/rabotu', 'ApiController@rabotuAction' );

Route::get ('/registraciya', 'ApiController@registraciyaAction' );

Route::get ('/vhod', 'ApiController@vhodAction' );

Route::get ('/zabul-parol', 'ApiController@zabul_parolAction' );

Route::get ('/zakazat', 'ApiController@zakazatAction' );

