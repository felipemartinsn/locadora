<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function home(){
        $movies = Movie::all();
        return view('home', ['movies' => $movies]);
    }
    public function create(){
        return view('movies.create');
    }
    public function store(Request $request){
        $movie = new Movie;
        
        $movie->nome = $request->nome;
        $movie->genero = $request->genero;
        $movie->alugado = 0;

        $movie->save();

        return redirect('/');
    }

    public function filmes(){
        $movies = Movie::all();
        return view('movies', ['movies' => $movies]);
    }
}
