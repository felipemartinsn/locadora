@extends('layouts.main')

@section('title', 'Alugado')

@section('content')
<div id="filmes-container" class="col-md-12">
        
        
        @if (auth()->user()->id_filme != NULL)
        
        <h2>Alugado</h2>
        <p class="subtitle">Você já alugou um filme</p>
        <form action="/devolver" method="POST">
            @csrf
            <input type="submit" class="btn btn-primary" value="Devolver">
        </form>
        @else
            <h2>Você ainda não alugou nenhum filme</h2>
            <p class="subtitle">Veja o nosso catálogo e alugue um filme</p>
        @endif
    </div>
@endsection