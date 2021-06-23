<?php

use \Illuminate\Support\Facades\Log;

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

Route::get('/log', function() {
    Log::channel('slack')->info('teste');
});

Route::get('/session', function(){
    session([
        'curso' => 'LaraDev',
        'nome' => 'Pedro Roth'
    ]);

/*    session()->put('nome', 'Pedro Afonso Roth Dimbarre');

    echo session('estudante', function() {
        session()->put('estudante', 'Pedro Afonso Roth Dimbarre');
        return session('student');
    });*/

/*    echo session()->get('estudante');*/

/*    session()->push('time', 'Pedro Roth');*/

/*    $estudante = session()->pull('estudante');*/

/*    session()->forget('nome');*/

/*    if(session()->has('nome')) {
        echo session('nome');
    }*/

/*    if(session()->exists('estudante')) {
        echo session('nome');
    } else {
        echo "Indice inexistente";
    }*/

/*    session()->flash('message', 'O artigo foi publicado com sucesso');*/


    var_dump(session()->all());
});

Route::get('/email', function() {
    $user = new stdClass();
    $user->name = "Pedro Afonso Roh Dimbarre";
    $user->email = "pedro.r@rotaexata.com.br";

    $order = new stdClass();
    $order->type = "Billet";
    $order->due_at = "2019-01-10";
    $order->value = 697;

    //\Illuminate\Support\Facades\Mail::to('pedrokaroth@gmail.com')->send(new \App\Mail\welcomeLaradev($user, $order));
    return new \App\Mail\welcomeLaradev($user, $order);
});

Route::get('/email-queue', function() {
    $user = new stdClass();
    $user->name = "Pedro Afonso Roh Dimbarre";
    $user->email = "pedrokaroth@gmail.com";

    $order = new stdClass();
    $order->type = "Billet";
    $order->due_at = "2019-01-10";
    $order->value = 697;

//    \Illuminate\Support\Facades\Mail::to('pedrokaroth@gmail.com')->send(new \App\Mail\welcomeLaradev($user, $order));
    \App\Jobs\welcomeLaraDev::dispatch($user, $order)->delay(now()->addSecond(15));
});
