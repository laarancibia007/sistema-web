@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="/css/main.css"> --}}
    <title>Concesionario Vehicular</title>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <section class="index">
            <!-- Header -->
        <section class="index">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{url('pagina_principal/index')}}">Clinica Dental Burgoa</a>
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
                        <a class="nav-link" href="{{url('pagina_principal/nosotros')}}">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('pagina_principal/contactos')}}">Contactos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('')}}">Productos</a>
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
    
            <section class="ent">
                <picture>
                    <img src="/img/imagen7.jpg" alt="">
                </picture>
                <div>
                    <h2>Todo nuestro catalogo de vehiculos.</h2>
                    <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo quasi, deserunt repellendus animi error ex est odio dolor, officiis facilis inventore architecto alias nesciunt voluptates ut qui, natus tempore eveniet!</h4>
                </div>
            </section>
            <!-- Cards -->
            <section class="prods">

                <div class="card">
                    <!-- fontawesome icon -->
                    <div>
                        <img class="img2" src="/img/imagen1.jpg" alt="">
                    </div>
                    <h3>Vehiculo 2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <div>
                        <img class="img2" src="/img/imagen2.jpg" alt="">
                    </div>
                    <!-- fontawesome icon -->
                    <h3>Vehiculo 3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <div>
                        <img class="img2" src="/img/imagen3.jpeg" alt="">
                    </div>
                    <!-- fontawesome icon -->
                    <h3>Vehiculo 4</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <div>
                        <img class="img2" src="/img/imagen4.jpg" alt="">
                    </div>
                    <!-- fontawesome icon -->
                    <h3>Vehiculo 5</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <div>
                        <img class="img2" src="/img/imagen5.jpg" alt="">
                    </div>
                    <!-- fontawesome icon -->
                    <h3>Vehiculo 6</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <div>
                        <img class="img2" src="/img/imagen6.jpg" alt="">
                    </div>
                    <!-- fontawesome icon -->
                    <h3>Vehiculo 7</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <div>
                        <img class="img2" src="/img/imagen7.jpg" alt="">
                    </div>
                    <!-- fontawesome icon -->
                    <h3>Vehiculo 8</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
            </section>
        </section>

        {{-- <footer>Angel Arancibia &copy; 2022</footer> --}}
    </div>
</body>
</html>
