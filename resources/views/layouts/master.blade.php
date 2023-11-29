<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="resources/css/app.css"> --}}
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @yield('libreria')
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{url('principal/index')}}">Clinica Dental Burgoa</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    {{-- <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Acerca de <span
                                class="visually-hidden">(current)</span></a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('principal/nosotros')}}">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('principal/catalogo')}}">Productos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Insertar Datos</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="{{url('categorias/crear')}}">Anadir Nueva Categoria</a>
                            <a class="dropdown-item" href="{{url('productos/crear/')}}">Anadir Producto</a>
                            {{-- <a class="dropdown-item" href="{{url('categorias/mod/')}}">Modificar Categoria</a> --}}
                            {{-- <a class="dropdown-item" href="{{url('productos/mod/{id}')}}">Modificar Producto</a> --}}
                            {{-- <a class="dropdown-item" href="{{url('productos/crear/')}}">Anadir Productos</a> --}}
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Listado</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="{{url('categorias')}}">Ver lista Categorias</a>
                            <a class="dropdown-item" href="{{url('productos')}}">Ver lista Producto</a>
                            {{-- <a class="dropdown-item" href="{{url('categorias/mod/{id}')}}">Modificar Categoria</a> --}}
                            {{-- <a class="dropdown-item" href="{{url('productos/mod/')}}">Modificar Producto</a> --}}
                            {{-- <a class="dropdown-item" href="{{url('productos/crear/')}}">Anadir Productos</a> --}}
                        </div>
                    </li>
                </ul>


                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>


            </div>
        </div>
    </nav>

    <main class="container py-4">
        @yield('content')
    </main>
    @yield('script')


</body>

</html>
