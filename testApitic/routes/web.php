<?php

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

Route::get('/', 'AnimauxController@index');
    

Route::get('/listeAnimaux', 'AnimauxController@listeAnimaux');

Route::get('/ajout', 'AnimauxController@ajouter');
Route::post('/', 'AnimauxController@addAnimal');
Route::get('/{animal}/modifier', 'AnimauxController@modifier');
Route::delete('/{animal}', 'AnimauxController@destroy');
Route::patch('/{animal}','AnimauxController@update');



