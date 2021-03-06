<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('recherche','HorsligneController@getrecherche');
Route::post('recherche','HorsligneController@postrecherche');
Route::post('creer-demande','HorsligneController@creer_demande');
Route::post('envoyer','HorsligneController@envoyer');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'auth'], function(){

    Route::controller('avocat','AvocatController');

});
