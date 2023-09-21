@extends('layouts.main')

@section('title', 'filmes')

@section('content')
<h1>bem vindo a seçao de filmes</h1>
@foreach($movies as $movie)
    <p>{{ $movie->nome }} -- {{ $movie->genero }}</p>
@endforeach

@endsection