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

Route::resourceVerbs([
    'create' => 'cadastro',
    'edit' => 'editar'
]);

Route::get('/', function () {
    return view('welcome');
});

/*Route::view('/form', 'form');*/

/*
 * GET
 */
/*Route::get('/users/1', 'UserController@index');
Route::get('/getData', 'UserController@getData');*/

/*
 * POST
 */
/*Route::post('postData', 'UserController@postData');*/

/*
 * POST
 */
/*Route::put('/users/1', 'UserController@testePut');*/

/*
 * PATCH
 */
/*Route::patch('/users/1', 'UserController@testePatch');*/

/*
 * MATH PUT PATCH
 */
/*Route::match(['put', 'patch'], '/users/2', 'UserController@testeMatch');*/

/*
 * DELETE
 */
/*Route::delete('/users/1', 'UserController@destroy');*/

/*
 * ANY
 */
/*Route::any('/users/any','UserController@any');*/

/*Route::get('/posts/premium', 'PostController@premium');
Route::resource('posts', 'PostController')->only(['index', 'show']);
Route::resource('posts', 'PostController')->except(['destroy']);
Route::get('/posts', 'PostController@index');*/

/*Route::get('/users', 'UserController@show');*/

/*Route::get('/users', function() {
    echo "Listagem dos usuários da minha base";
});

Route::view('/form', 'form');

Route::fallback(function() {
    echo "<h1>Ops seja muito bem vindo ao 404</h1>";
});

Route::redirect('/users/add', url('/form'), 301);*/

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/index', 'PostController@indexRedirect')->name('posts.indexRedirect');
