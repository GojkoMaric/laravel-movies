<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;
use \App\Comment;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact(['movies']));
    }

    public function show($id)
    {
        $movie = Movie::with('comments')->find($id);
        return view('movies.show', compact('movie'));
    }

    public function add(){
        return view('movies.create');
    }

    public function store()
    {
        $this->validate(request(), ['title'=>'required', 
        'director'=>'required',
        'year'=>'required',
        'storyline'=>'required | max:1000',
        ]);

        Movie::create([
            'title'=>request('title'),
            'director'=>request('director'),
            'year'=>request('year'),
            'storyline'=>request('storyline')
        ]);

        return redirect()->route('all-movies');
    }
}
