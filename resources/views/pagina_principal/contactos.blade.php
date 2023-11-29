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
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input type="text"
                class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" required value="{{old('nombre')}}">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
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
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

        {{-- <footer>Angel Arancibia &copy; 2022</footer> --}}
    </div>
</body>
</html>
