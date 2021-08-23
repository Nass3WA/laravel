<?php

namespace App\Http\Controllers;


use App\Models\Comment;
use App\Models\Game;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, int $game)
    {
        $request->validate([
            'mark' => 'min:1',
            'content' => 'required|min:5'
        ]);
        
        $game = Game::findorFail($game);
        
        // Insertion du commentaire pour l'article récupérée plus haut
        $comment = new Comment();
        $comment->mark = $request->input('mark');
        $comment->content = $request->input('content');
        $comment->user_id = auth()->user()->id;
        // Récupère le post plus haut complet, donc doit préciser l'id du post comme avec le slug plus haut
        // $comment->post_id = $post->id;
        // $comment->save();
        //Ou équivalent
        $game->comments()->save($comment);
        
        return redirect()->route('games.show', ['id' => $game->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment $comment)
    {
        //
    }
}