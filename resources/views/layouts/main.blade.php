<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css">
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.png" alt="logo" width="40px">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Clientes</a><!--antiga home-->
                        </li>
                        <!--<li class="nav-item">
                            <a href="/cliente/showall" class="nav-link">Clientes</a>
                        </li>-->
                        <li class="nav-item">
                            <a href="/endereco/showall" class="nav-link">Endereços</a>
                        </li>
                        <li class="nav-item">
                            <a href="/produto/showall" class="nav-link">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/orcamento/showall" class="nav-link">Orçamentos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                {{-- FLASH MESSAGES --}}
                @if (session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif

                {{-- yield = diretiva que determina a area do conteúdo --}}
                @yield('content')
            </div>
        </div>
    </main>

    <footer>
        <p>MeuCrud &copy; 2022</p>
    </footer>
    <script src='http://code.jquery.com/jquery-3.6.0.min.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--IonIcons-->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!--script da pasta public-->
    <script src="/js/script.js"></script>
</body>

</html>
