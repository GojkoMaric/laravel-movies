@extends('layouts.master')
@section('title')
    All Movies
@endsection

@section('content')

<h1>Single Page Movie no. {{$movie->id}}</h1>
<h2 class='bg-info'>{{$movie->title}}</h2>
<h3>{{$movie->year}}</h3>
<h3 class="bg-warning">{{$movie->storyline}}</h3>

<h1>Comments</h1>
    <ul>
    @foreach($movie->comments as $comment)
    <li>{{$comment->content}}</li>
    <li>{{$comment->created_at}}</li>
    @endforeach
    </ul>


    <h2 class="blog-post-title">Create comment</h2>

    <form method="POST" action="{{ route('store-comments', ['movie_id' => $movie->id]) }}">

        {{ csrf_field() }}

        <div class="form-group">

        <div class="form-group">
            <label for="content">Comment</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>  

@endsection