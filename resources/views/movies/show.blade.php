@extends('layouts.master')
@section('title')
    All Movies
@endsection

@section('content')

<h1>Single Page Movie no. {{$movie->id}}</h1>
<h2 class='bg-info'>{{$movie->title}}</h2>
<h3>{{$movie->year}}</h3>
<h3 class="bg-warning">{{$movie->storyline}}</h3>

@endsection