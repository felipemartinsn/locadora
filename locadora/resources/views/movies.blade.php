@extends('layouts.main')

@section('title', 'Filmes')

@section('content')

<div id="filmes-container" class="col-md-12">
    
    <h2>Bem-vindo à seção de filmes</h2>
    <p class="subtitle">Veja os filmes da nossa locadora</p>
    <div id="cards-container" class="row">
        
        @foreach($movies as $movie)
        <div class="card col-md-3">
            <img src="/img/placeholder.jpg" alt="Imagem de starline no Freepik">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->nome }}</h5>
                <p class="card-genero">{{ $movie->genero }}</p>
                @if(!$movie->alugado)
               <a href="/filmes/alugar/{{ $movie->id }}" class="btn btn-primary">Alugar</a>
               
                @elseif($movie->id == auth()->user()->id_filme)
                <a href="/alugado/" class="btn btn-primary">Filme já alugado</a>
                @endif
                @if (auth()->check() && auth()->user()->admin == 1)
                <a href="/filmes/edit/{{ $movie->id }}" class="btn btn-primary">Editar</a>
                <form action="/filmes/{{ $movie->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                </form>
                
                @endif  
                </div>
            </div>
            @endforeach
        </div>         
    </div> 
@endsection

