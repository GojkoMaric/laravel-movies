@extends('layouts.master')
@section('title')
    All Movies
@endsection

@section('content')

<h1>All movies</h1>
@foreach($movies as $movie)
    <h2>{{$movie->title}}</h2>
    <h4>{{$movie->storyline}}</h4>
@endforeach

@endsection