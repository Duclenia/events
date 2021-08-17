<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>
        {{-- fonte da google --}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        {{-- bootstrao css--}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        {{-- css e js --}}
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-ligth">
                <nav class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.png" alt="HDC Eventes">

                    </a>
                    <ul class="navbar-nav">
                      <li class="nav-item">
                          <a href="/" class="nav-link">Eventos</a>
                      </li>
                      <li class="nav-item">
                          <a href="/events/criar" class="nav-link">Criar eventos</a>
                      </li>
                      <li class="nav-item">
                          <a href="/" class="nav-link">Entrar</a>
                      </li>
                    </ul>
                </nav>
            </nav>
        </header>
        @yield('content')
       <footer>
           <p>HDC Events &copy; 2021</p>
       </footer>
    </body>
</html>
