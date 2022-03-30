<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- CSS - pasta public-->
        <link rel="stylesheet" href="/css/style.css">

        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.png" alt="logo" width="50px">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/cliente/criar" class="nav-link">Novo Cliente</a>
                        </li>
                        <li class="nav-item">
                            <a href="/listar" class="nav-link">Listar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/listar/1" class="nav-link">Listar ID</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        {{-- yield = diretiva que determina a area do conteúdo --}}
        @yield('content')
        <footer>
            <p>MeuCrud &copy; 2022</p>
        </footer>
        <!--IonIcons-->
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <!--script da pasta public-->
        <script src="/js/script.js"></script>
    </body>
</html>
