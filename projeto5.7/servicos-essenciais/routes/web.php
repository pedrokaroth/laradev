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

Route::get('/files', function() {
    $files = \Illuminate\Support\Facades\Storage::files();
    $allFiles = \Illuminate\Support\Facades\Storage::allFiles();

    $directories = \Illuminate\Support\Facades\Storage::directories('');
    $allDirectories = \Illuminate\Support\Facades\Storage::allDirectories('');

    \Illuminate\Support\Facades\Storage::makeDirectory('public/course');
    \Illuminate\Support\Facades\Storage::deleteDirectory('public/course');

    //\Illuminate\Support\Facades\Storage::disk('public')->put('upinside.txt', 'O melhor curso de laravel do mercado');
    //\Illuminate\Support\Facades\Storage::put('upinside.txt', 'O melhor curso de laravel do mercado');

    //echo \Illuminate\Support\Facades\Storage::get('upinside.txt');

    //var_dump($allDirectories);

    //return \Illuminate\Support\Facades\Storage::download('upinside.txt');

/*    if(\Illuminate\Support\Facades\Storage::exists('upinside.txt')) {
        echo "O arquivo existe";
        return \Illuminate\Support\Facades\Storage::download('upinside.txt');
    } else {
        echo "O arquivo não existe";
    }*/

    //echo \Illuminate\Support\Facades\Storage::size('upinside.txt');

    //\Illuminate\Support\Facades\Storage::prepend('upinside.txt', 'Upinside Treinamentos');
    //\Illuminate\Support\Facades\Storage::append('upinside.txt', 'Upinside Treinamentos');

    //\Illuminate\Support\Facades\Storage::copy('upinside.txt', 'public/upinside-123.txt');
    //\Illuminate\Support\Facades\Storage::move('upinside.txt', 'public/upinside-123.txt');
    //\Illuminate\Support\Facades\Storage::delete('public/upinside-123.txt');
});

Route::resource('imoveis', 'PropertyController');


