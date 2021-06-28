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

Route::get('/', function() {

    $user = new stdClass();
    $user->name = "Pedro Afonso";
    $user->birth = "1999-05-06";
    $user->city = "Joinville";
    $user->email = "pedrokaroth@gmail.com";
    $user->level = 2;

    $courses = [
        [
            'id' => 1,
            'name' => 'LaraDev',
            'tutor' => 'Gustavo'

        ],
        [
            'id' => 2,
            'name' => 'Bootstrap Builder',
            'tutor' => 'Gustavo'
        ],
        [
            'id' => 3,
            'name' =>'FullStack PHP Developer',
            'tutor' => 'Robson'
        ]
    ];

    $alert = "<div style='background-color: red'>Alerta</div>";

    return view('front.home', [
        'user' => $user,
        'alert' => $alert,
        'courses' => $courses
    ]);
});
