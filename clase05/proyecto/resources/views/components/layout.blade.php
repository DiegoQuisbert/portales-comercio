<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }} :: Proyecto Da Vinci</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Proyecto Da Vinci</a>

                <button class="navbar-toggler" type="button" data-bs- toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria- label="Alternar menú de navegación">

                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <x-nav-link route="home">
                                Inicio
                            </x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link route="about">
                                Quienes Somos
                            </x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link route="movies.index">
                                Listado Peliculas
                            </x-nav-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="p-4">
            @if(session()->has('feedback.message'))
            <div class="alert alert-success">{!! session()->get('feedback.message') !!}</div>
            @endif

            {{ $slot }}
        </main>
        <footer class="footer text-bg-dark text-center">
            <p>Copyright &copy; Da Vinci 2024</p>
        </footer>
    </div>

    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script>location.href="https://davinci.edu.ar"</script> --}}
</body>

</html>
