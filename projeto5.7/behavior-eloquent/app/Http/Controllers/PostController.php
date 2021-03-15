<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|Application|Response|View
     */
    public function index()
    {
        /*$posts = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->get();*/
        /*$posts = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->first();*/
        /*$posts = Post::where('created_at', '>=', date('2022-m-d H:i:s'))->firstOrFail();*/
        /*$posts = Post::find(1);*/
        /*$posts = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->exists();*/
        $posts = Post::all();

        return view('posts.index',['posts' => $posts]);


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
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
