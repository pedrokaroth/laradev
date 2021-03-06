<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show(int $id)
    {
        $user = User::find($id);
/*
        var_dump($user);

        $userAddress = $user->address()->get()->first();
        if($userAddress) {
            var_dump($userAddress);
        }

        $addressTest = new Address([
            'address' => 'Rua dos Bobos 2',
            'number' => '0',
            'complement' => 'Apto 123',
            'zipcode' => '88000-000',
            'city' => 'Floripa',
            'state' => 'SC'
        ]);

        $address = new Address();
        $address->address = 'Rua dos Bobos 3';
        $address->number = 0;
        $address->complement = 'Apto 123';
        $address->zipcode = '88800-000';
        $address->city = 'Floripa';
        $address->state = 'SC';

        $user->address()->save($address);

        $user->address()->saveMany([$address, $addressTest]);

        $user->address()->create([
            'address' => 'Rua dos Bobos 2',
            'number' => '0',
            'complement' => 'Apto 123',
            'zipcode' => '88000-000',
            'city' => 'Floripa',
            'state' => 'SC'
        ]);

        $user->address()->createMany([[
            'address' => 'Rua dos Bobos 2',
            'number' => '0',
            'complement' => 'Apto 123',
            'zipcode' => '88000-000',
            'city' => 'Floripa',
            'state' => 'SC'
        ], [
            'address' => 'Rua dos Bobos 2',
            'number' => '0',
            'complement' => 'Apto 123',
            'zipcode' => '88000-000',
            'city' => 'Floripa',
            'state' => 'SC'
        ]]);

        $users = User::with('address')->get();
        dd($users);

        $posts = $user->posts()->get();
        if($posts) {
            foreach ($posts as $post) {
                var_dump($post);
            }
        }
*/
/*        $comments = $user->commentsOnMyPost()->get();

        if($comments) {
            foreach ($comments as $comment) {
                echo "Post: {$comment->post} User: {$comment->user} {$comment->content}<br>";
            }
        }*/

/*        $user->comments()->create([
            'content' => 'Comentario de usuario'
        ]);*/

/*        $comments = $user->comments()->get();

        if($comments) {
            echo "<hr><h1>Comentario</h1>";
            foreach ($comments as $comment) {
                echo "<br>Comentario #{$comment->id} {$comment->content}";
            }
        }*/

        $students = User::students()->get();
        if($students) {
            echo "<h1>Listagem de Alunos</h1>";
            foreach ($students as $student) {
                echo "Nome do usuário: {$user->name}<br>";
                echo "Email: {$user->email}<br>";

            }
        }

        $admins = User::admins()->get();
        if($admins) {
            echo "<h1>Listagem de Administradores</h1>";
            foreach ($admins as $admin) {
                echo "Nome do usuário: {$admin->name}<br>";
                echo "Email: {$admin->email}<br>";

            }
        }

        $users = User::all();
        var_dump($users->makeVisible('created_at')->toArray());
        var_dump($users->makeHidden('created_at')->toJson(JSON_PRETTY_PRINT));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
