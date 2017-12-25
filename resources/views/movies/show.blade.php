@extends('layouts.master')
@section('title')
    All Movies
@endsection

@section('content')

<h1>Single Page Movie no. {{$movie->id}}</h1>
<h2>{{$movie->title}}</h2>
<h3>{{$movie->storyline}}</h3>
@endsection