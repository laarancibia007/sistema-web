@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="/css/main.css"> --}}
    <link rel="stylesheet" href="/css/main.css">
    <title>Clinica Dental Burgoa</title>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <section class="index">
            <header>
                <div>
                    <a href="#">Clinica Dental Burgoa</a>
                    <!-- hamburguesa -->
                    <!-- ul>li>a -->
                    <!-- esto permite crear una lista completa como atajo -->
                    <ul>
                        <li><a href="{{url('pagina_principal/index/')}}">Inicio</a></li>
                        <li><a href="{{url('pagina_principal/nosotros/')}}">Nosotros</a></li>
                        <!-- <li><a href="{{url('pagina_principal/productos/')}}">Productos</a></li> -->
                        <li><a href="{{url('pagina_principal/contactos/')}}">Contactos</a></li>
                        {{-- <li><a href="inicio.html">Inicio de Sesion</a></li> --}}




                    </ul>
                </div>
            </header>
            <!-- Enterprise -->
            <div class="card">
                <img class="card-img-top" src="img/imagen3.jpeg" alt="Title">
                {{-- <img class="card-img-top" src="resources/img/imagen3.jpeg" alt="Title"> --}}
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
            <section class="ent">
                <picture>
                    <img src="/img/imagen5.jpg" alt="">
                </picture>

            </section>
            <div>
                <h1>lorem ipsum 1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus reiciendis, non ab officia autem dolor veritatis ratione ipsum molestiae, quisquam nulla suscipit eligendi totam? Culpa eligendi facilis velit vel voluptatibus.</p>
            </div>

            <!-- Cards -->
            <h2>Informacion acerca de los tratamientos</h2>
            <section class="prods">
                <div class="card">
                    <!-- fontawesome icon -->
                    <h3>Traramiento 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <!-- fontawesome icon -->
                    <h3>Traramiento 2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <!-- fontawesome icon -->
                    <h3>Traramiento 3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
                <div class="card">
                    <!-- fontawesome icon -->
                    <h3>Traramiento 4</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
                </div>
            </section>
        </section>
        <h2>Informacion de los lorem ipsums</h2>
        <section class="ent1">
            <picture>
                <img src="{{asset('storage/imagen1.jpg')}}" alt="">
            </picture>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus reiciendis, non ab officia autem dolor veritatis ratione ipsum molestiae, quisquam nulla suscipit eligendi totam? Culpa eligendi facilis velit vel voluptatibus.</p>
            </div>
        </section>


        <!-- Title -->

        {{-- <h1>Galeria de lorem ipsums</h1>

        <!-- Galeria -->
        <div class="grid-galeria">

            <a href="" class="grid-galeria_item">
                <img src="/img/imagen3.jpeg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="{{asset('storage/imagen1.jpg')}}" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen7.jpg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen5.jpg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen4.jpg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen1.jpg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen7.jpg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen2.jpg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen3.jpeg" alt="" class="grid-galeria_img">
            </a>
            <a href="" class="grid-galeria_item">
                <img src="/img/imagen5.jpg" alt="" class="grid-galeria_img">
            </a>
        </div> --}}


        <!-- Cards -->
        <h2>Informacion</h2>
        <section class="prods">
            <div class="card">
                <!-- fontawesome icon -->
                <h3>Informacion 1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
            </div>
            <div class="card">
                <!-- fontawesome icon -->
                <h3>Informacion 2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
            </div>
            <div class="card">
                <!-- fontawesome icon -->
                <h3>Informacion 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
            </div>
            <div class="card">
                <!-- fontawesome icon -->
                <h3>Informacion 4</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, sequi?</p>
            </div>
            <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #FC5353;">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </section>

        {{-- <footer>Clinica Dental Burgoa &copy; 2023</footer> --}}
    </div>
</body>
</html>