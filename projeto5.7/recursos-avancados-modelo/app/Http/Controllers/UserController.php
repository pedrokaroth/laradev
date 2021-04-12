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
        dd($users);*/

        $posts = $user->posts()->get();
        if($posts) {
            foreach ($posts as $post) {
                var_dump($post);
            }
        }

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
