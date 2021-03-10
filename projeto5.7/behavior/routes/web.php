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

/*Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/index', 'PostController@indexRedirect')->name('posts.indexRedirect');*/

/*Route::get('/users/{id}/comments/{comment}', function($id, $comment) {
    var_dump($id, $comment);
});*/

/*Route::get('/users/{id}/comments/{comment?}', function($id, $comment = null) {
    var_dump($id, $comment);
})->where('id', '[0-9]+');*/

/*Route::get('/users/{id}/comments/{comment?}', function($id, $comment = null) {
    var_dump($id, $comment);
})->where([
    'id' => '[a-z0-9]+',
    'comment' => '[a-zA-Z0-9]+'
]);*/

/*Route::get('/users/{id}/comments/{comment?}','userController@userComments')->where([
    'id' => '[0-9]+',
    'comment' => '[0-9]+'
]);*/

/*Route::get('/users/1', 'UserController@inspect')->name('inspect');*/

/*Route::prefix('admin')->group(function(){
    Route::view('/form', 'form');
});

Route::name('admin.posts.')->group(function() {
    Route::get('/admin/posts/index', 'PostController@index')->name('index');
    Route::get('/admin/posts', 'PostController@show')->name('show');
});

Route::middleware(['throttle:10,1'])->group(function() {
    Route::view('/form', 'form');
});

Route::namespace('Admin')->group(function(){
    Route::get('/users', 'UserController@index');
});*/

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['throttle:10,1'],'as' => 'admin.'], function() {
    Route::resource('users', 'UserController');
});
