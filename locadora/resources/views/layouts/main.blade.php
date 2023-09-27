<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- fontes -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- css da aplicacao -->
        <link href="/css/styles.css" rel ="stylesheet">
        <!-- css bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    @yield('home')
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/">
                        <img src="/img/filme.png" alt="Filmes">
                    </a>
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/filmes/" class="nav-link">Filmes</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/alugado/" class="nav-link">Alugados</a>
                    </li>
                    
                      <!-- @if (auth()->check() && auth()->user()->admin == 1) -->
                    <li class="navbar-item">
                        <a href="/create/" class="nav-link">Adicionar Filme</a>
                    </li>
                                       
                      <!-- @endif    -->

                    <li class="navbar-item">
                        <a href="{{ route('logout') }}" class="nav-link">Sair</a>
                    </li>
                   
                    </ul>
                </div>
            </nav>
        </header>
    </body>

        @yield('content')
        <footer class="footer">
            <p>Locadora de filmes &copy; 2023</p>
        </footer>
</html>
