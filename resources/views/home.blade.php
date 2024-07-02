@extends('layouts.app')

@section('content')
    <h1>Lista Film:</h1>
    @foreach ($movies as $film)
    <div class="film-card">
      <p>Titolo:{{$film->title}}</p>
      <p>Originale:{{$film->original_title}}</p>
    </div>   
    @endforeach
@endsection
