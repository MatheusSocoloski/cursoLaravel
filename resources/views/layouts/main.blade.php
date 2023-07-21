<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

        <!-- CSS Bootstrap -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


        <!-- CSS da aplicação -->

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <head>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                    <img src="/img/hdcevents_logo.svg" alt="HDC Events">
                </a>
                <ul class="navbar-nav">
                    <li class="nav.item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav.item">
                        <a href="/events/create" class="nav-link">Criar Eventos</a>
                    </li>
                    @auth
                    <li class="nav.item">
                        <a href="/dashboard" class="nav-link">Meus Eventos</a>
                    </li>
                    <li class="nav.item">
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                    </form>    
                    </li>
                    @endauth
                    @guest
                    <li class="nav.item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav.item">
                        <a href="/register" class="nav-link">Cadastrar</a>
                    </li>
                    @endguest
                </ul>
                </div>
            </nav>
        </head>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                  <p class="msg">{{ session('msg')}}</p>
                @endif
                @yield('content') 
            </div>
        </div>
    </main>
    <footer>
        <p>HDC Events &copy; 2023</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    </body>
</html>
