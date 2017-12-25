@extends('layouts.master')
@section('title')
    All Movies
@endsection

@section('content')

<h1 class='bg-info'>Add Movie</h1>


<form method='POST' action="{{route ('store-movie')}}">

{{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name='title' class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter title">
      @if($errors->has('title'))
        <ul>
        @foreach($errors->get('title') as $error)
          <li class='alert-danger'>{{$error}}</li>
        @endforeach
        </ul>
      @endif
  </div>

  <div class="form-group">
    <label for="director">Director</label>
    <input type="text" name='director' class="form-control" 
    id="director" aria-describedby="emailHelp" placeholder="Enter Director">
    @if($errors->has('director'))
        <ul>
        @foreach($errors->get('director') as $error)
          <li class='alert-danger'>{{$error}}</li>
        @endforeach
        </ul>
      @endif  
  </div>

  <div class="form-group">
    <label for="year">Year</label>
    <input type="text" name='year' class="form-control" 
    id="year" aria-describedby="emailHelp" placeholder="Enter Year">
    @if($errors->has('year'))
        <ul>
        @foreach($errors->get('year') as $error)
          <li class='alert-danger'>{{$error}}</li>
        @endforeach
        </ul>
      @endif
  </div>

  <div class="form-group">
    <label for="storyline">Storyline</label>
    <textarea class="form-control" name='storyline' 
    id="storyline" rows="3" placeholder="Enter Storyline"></textarea>
    @if($errors->has('storyline'))
        <ul>
        @foreach($errors->get('storyline') as $error)
          <li class='alert-danger'>{{$error}}</li>
        @endforeach
        </ul>
      @endif
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection