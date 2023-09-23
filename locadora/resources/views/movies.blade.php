@extends('layouts.main')

@section('title', 'filmes')

@section('content')
<h1>bem vindo a seçao de filmes</h1>
@foreach($movies as $movie)
    <p>{{ $movie->nome }} -- {{ $movie->genero }}</p>
    <a href="/filmes/{{ $movie->id }}" class="btn btn-primary" id="event-submit">Saiba mais</a>
    <a href="/filmes/edit/{{ $movie->id }}" class="btn btn-primary" id="event-submit">Editar</a>
    <form action="/filmes/{{ $movie->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
    </form>
@endforeach

@endsection