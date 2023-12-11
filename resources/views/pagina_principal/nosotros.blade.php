@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>Clinica Dental Burgoa</title>
</head>
<body>
    <div class="container">
        <section class="index">
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
                        <a class="nav-link" href="{{url('pagina_principal/catalogo')}}">Productos</a>
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

            <!-- Enterprise -->
            <section class="ent">
                <picture>
                    <img src="/img/imagenconcesionario.jpg" alt="">
                </picture>
                <div>
                    <h2>Acerca de nosotros</h2>
                    <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo quasi, deserunt repellendus animi error ex est odio dolor, officiis facilis inventore architecto alias nesciunt voluptates ut qui, natus tempore eveniet!</h4>
                </div>
            </section>
            <!-- Cards -->
            <section class="prods">
                <div class="card">
                    <!-- fontawesome icon -->
                    <!-- <img src="/img/car-side-solid.svg" alt=""> -->
                    <div>
                        <img class="img2" src="/img/test2.png" alt="">
                    </div>
                    <h3>Ortodoncia</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, ullam nobis molestiae asperiores necessitatibus nam quam sunt, veritatis, corporis aliquid id officia ea quasi tempore accusamus dolor doloribus explicabo ad.</p>
                    <button class="button">Prueba de manejo</button>
                </div>
                <div class="card">
                    <!-- fontawesome icon -->
                    <div>
                        <img class="img2" src="/img/cotizar.png" alt="">
                    </div>
                    <h3>Implantologia</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi velit quaerat id quo suscipit, odio recusandae temporibus debitis itaque quidem porro nihil numquam voluptates eum dolore totam labore ex sit.</p>
                    <button class="button">Cotizacion</button>
                </div>
                <div class="card">
                    <!-- fontawesome icon -->
                    <div>
                        <img class="img2" src="/img/accesorios.png" alt="">
                    </div>
                    <h3>Estetica</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo deleniti iste, at nihil reiciendis ipsam optio quae autem. Illum ex rerum facere blanditiis temporibus asperiores, maiores velit molestias nemo dolorem?</p>
                    <button class="button">Buscar Accesorios</button>
                </div>
                <div class="card">
                    <!-- fontawesome icon -->
                    <div>
                        <img class="img2" src="/img/contactanos3.jpeg" alt="">
                    </div>
                    <h3>Curaciones</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum quibusdam reprehenderit necessitatibus repellat commodi quam, repellendus accusamus. Ipsa, ullam quos culpa, temporibus molestias ducimus, vitae unde officia nulla aliquid cum!</p>
                    <button class="button">Configurar</button>
                </div>
            </section>
        </section>
        {{-- <footer>Clinica Dental Burgoa &copy; 2023</footer> --}}
    </div>
</body>
</html>
