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
     * @return Factory|Application|Response|View
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //Object -> prop -> save
/*        $post = new Post();
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->description = $request->description;
        $post->save();*/

/*        Post::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description
        ]);*/

/*        $post = Post::firstOrNew(['title' => 'teste2'], [
            'subtitle' => "teste",
            'description' => "teste"
        ]);*/

        $post = Post::firstOrCreate(['title' => 'teste3'], [
            'subtitle' => "teste",
            'description' => "teste"
        ]);
        var_dump($post);
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Response
     */
    public function show(Post $post): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return Response
     */
    public function edit(Post $post): Response
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Post $post
     * @return Response
     */
    public function update(Request $request, Post $post): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
