<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
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
        $post = Post::find($id);

        echo "#{$post->id} {$post->title}<br>";
        echo "Subtitulo: {$post->subtitle}<br>";
        echo "Conteudo: {$post->content}<br>";
        echo "Data: {$post->created}<br>";

  /*      $post->title = 'Titulo de teste do artigo';
        $post->save();*/


        $postAuthor = $post->author()->get()->first();
        if($postAuthor) {
            echo "<h1>Dados do Usuário</h1><br>";
            echo "Nome de usuário: {$postAuthor->name}<br>";
            echo "E-mail: {$postAuthor->email}";
        }

        $postCategories = $post->categories()->get();
        if($postCategories) {
            echo "<h1>Categorias</h1><br>";
            foreach ($postCategories as $category) {
                echo "Categoria: #{$category->id} {$category->name}<br>";
            }
        }

        //$post->categories()->attach([3, 4]);
        //$post->categories()->detach([3, 4]);
        //$post->categories()->sync([5, 10]);

/*        $post->comments()->create([
            'content' => 'Teste de comentario123'
        ]);*/

        $comments = $post->comments()->get();

        if($comments) {
            echo "<hr><h1>Comentario</h1>";
            foreach ($comments as $comment) {
                echo "<br>Comentario #{$comment->id} {$comment->content}";
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
