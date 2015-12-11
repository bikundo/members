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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/members/frontend', function () {
//    Approved()->
    $members = \App\Member::with('sector')->get();

    return view('members.frontend', compact('members'));
});
Route::get('/thanks', [
    'as' => 'thank.you',
    function () {
        return view('members.thanks');
    },
]);
Route::group(['middleware' => 'auth'], function () {
    Route::get('members/create', ['uses' => 'MembersController@Create', 'as' => 'members.create']);
    Route::get('members/links/{id}', ['uses' => 'MembersController@AddLinks', 'as' => 'members.links']);
    Route::post('members/links/{id}', ['uses' => 'MembersController@SaveLinks', 'as' => 'members.links.save']);
    Route::post('members', ['uses' => 'MembersController@store', 'as' => 'members.save']);
    Route::get('members/', ['uses' => 'MembersController@index', 'as' => 'members.view']);
    Route::get('members/approve/{id}', ['uses' => 'MembersController@approve', 'as' => 'members.approve']);
});
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
