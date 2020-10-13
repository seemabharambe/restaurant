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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::group(['middleware'=>"web"],function(){




Route::get('/','RestoController@index');

Route::get('/list','RestoController@list');

Route::view('add','add');


Route::post('/add','RestoController@add');


Route::get('/delete/{id}','RestoController@delete');


Route::get('/edit/{id}','RestoController@edit');




Route::post('edit','RestoController@update');


Route::view('register','register');

Route::post('register','RestoController@register');

Route::view('login','login');

Route::post('login','RestoController@login')->where('name', '[A-Za-z]+');

Route::view('logout','logout');
//Route::get('logout','RestoController@logout');


Route::post('upload','Users@index');

Route::view('form','userform');

Route::post('search','RestoController@searchname');

Route::view('form1','searchform');

Route::get('lists','RestoController@list2');

Route::get('session/get','RestoController@accessSessionData');

Route::get('session/set','RestoController@storeSessionData');



Route::get('session/remove','RestoController@deleteSessionData');

//Route::get('session','RestoController@showProfile');

});

Route::post('upload','Users@index');

Route::view('form','userform');


Route::get('db','Users@index1');

Route::get('list3','Users@list3');

Route::view('form','companyform');

Route::post('submit1','Users@save');


