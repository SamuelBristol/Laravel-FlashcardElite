<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'CardsController@showIndex'));
Route::get('newCard', array('uses' => 'CardsController@newCard'));
Route::get('deleteCard/{id}', array('uses' => 'CardsController@deleteCard'));
Route::get('editCard/{id}', array('uses' => 'CardsController@editCard'));
Route::post('insertCard', array('uses' => 'CardsController@insertCard'));
Route::post('updateCard', array('uses' => 'CardsController@updateCard'));