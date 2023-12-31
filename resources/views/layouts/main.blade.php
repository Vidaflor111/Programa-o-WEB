<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
        <link rel="stylesheet" href="/css/styles.css">
        <script src = "/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo2.png" alt="Toveen">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/eventos" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/eventos/cadastrar" class="nav-link">Cadastrar Evento</a>
                        </li>
                        <li class="nav-item">
                            <a href="/entrar" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/cadastrar-conta" class="nav-link">Cadastrar Conta</a>
                        </li>
                    </ul>
                    <form class="form-inline ml-auto">
                        <input type="text" id="search" class= "form-control" placeholder="Pesquisar...">
                    </form>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div clas= "row">
                    @if(session('msg'))
                        <p class="msg">{{session ('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
        <footer>
            <p>Toveen &copy; 2023</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
