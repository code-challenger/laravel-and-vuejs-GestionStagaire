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

Route::get('/', function () {
    return redirect('dashboard');
});

// Route::get('stagaire','stagaireController@index');
// Route::get('stagaire/create','stagaireController@Create');
// Route::post('stagaire','stagaireController@store');
// Route::get('stagaire/{cin}/edit','stagaireController@edit');
// Route::put('stagaire/{cin}','stagaireController@update');
// Route::get('stagaire/{cin}','stagaireController@destroy');

Route::resource('stagaire','stagaireController');
Route::resource('user','UsersController');


Route::get('dashboard','stagaireController@dashb');
Route::get('ATTESTATION/{id}','stagaireController@attes');
Route::post('addAbs','stagaireController@addAbs');


Route::get('/downoladAll','stagaireController@exportAll');
Route::get('/downoladEnCours','stagaireController@exportEc');
Route::get('/downoladCom','stagaireController@exportCom');
Route::get('/downoladRef','stagaireController@exportRef');

Route::get('/search/{cin}','stagaireController@search');
Route::get('/allS','stagaireController@allStagaire');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
