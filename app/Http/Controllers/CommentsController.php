<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Comment;
use \App\Movie;

class CommentsController extends Controller
{
    public function store($movieId)
    {
        $this->validate(request(), ['content'=>'required | max:255']);

        $comment = new Comment;
        $comment->movie_id=$movieId;
        $comment->content=request('content');

        $comment->save();

        return redirect()->route('single-movie', ['id' => $movieId]);        
    }
}
