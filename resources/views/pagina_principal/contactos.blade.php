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
    <h1>Formulacion de citas medicas</h1>
        <!-- Header -->
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nombre Completo</label>
                <input type="text"
                class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" required value="{{old('nombre')}}">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Correo Electronico</label>
                <input type="text"
                class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" required value="{{old('nombre')}}">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Celular</label>
                <input type="number"
                class="form-control" name="precio" id="precio" placeholder="" aria-describedby="fileHelpId">
                <div id="fileHelpId" class="form-text">Help text</div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Escribe tu mensaje</label>
                <input type="text"
                class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" required value="{{old('nombre')}}">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            {{-- <div class="mb-3">
                <label for="" class="form-label">Elegir Archivo</label>
                <input type="file" class="form-control" name="img" id="" placeholder="" aria-describedby="fileHelpId">
                <div id="fileHelpId" class="form-text">Help text</div>
            </div> --}}
            {{-- <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number"
                class="form-control" name="precio" id="precio" placeholder="" aria-describedby="fileHelpId">
                <div id="fileHelpId" class="form-text">Help text</div>
            </div> --}}
            {{-- <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number"
                class="form-control" name="stock" id="stock" placeholder="" aria-describedby="fileHelpId">
                <div id="fileHelpId" class="form-text">Help text</div>
            </div> --}}
            {{-- <div class="mb-3">
                <label for="categoria_id" class="form-label">Categoria del producto</label>
                <select class="form-select form-select-lg" name="categoria_id" id="categoria_id">
                    <option selected>Seleccione una categoria</option> --}}
                    {{-- mejorar acerca de los productos los id --}}
                    {{-- @foreach ($listacat as $cat)
                        <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                    @endforeach
                </select>
            </div> --}}
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <footer>Clinica Dental Burgoa &copy; 2023</footer>
    </div>
</body>
</html>
