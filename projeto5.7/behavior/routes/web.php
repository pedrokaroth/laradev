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
    return view('welcome');
});

Route::view('/form', 'form');


/*
 * GET
 */
Route::get('/users/1', 'UserController@index');
Route::get('/getData', 'UserController@getData');

/*
 * POST
 */
Route::post('postData', 'UserController@postData');

/*
 * POST
 */
Route::put('/users/1', 'UserController@testePut');

/*
 * PATCH
 */
Route::patch('/users/1', 'UserController@testePatch');

/*
 * MATH PUT PATCH
 */
Route::match(['put', 'patch'], '/users/2', 'UserController@testeMatch');

/*
 * DELETE
 */
Route::delete('/users/1', 'UserController@destroy');

/*
 * ANY
 */
Route::any('/users/any','UserController@any');
