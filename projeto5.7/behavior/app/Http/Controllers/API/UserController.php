<?php

namespace LaraDev\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use LaraDev\Http\Controllers\Controller;

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
        $user = [
            'user_id' => $id,
            'user_name' => 'Pedro Afonso Roth Dimbarre',
            'user_email' => 'pedrokaroth@gmail.com',
            'course' => 'LaraDev'
        ];

        echo json_encode($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(int $id)
    {
        //
    }
}
