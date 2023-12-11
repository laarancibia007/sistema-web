@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-m6">
        <h1>Formulario de insercion de datos</h1>

    </div>
</div>
<div class="row">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $e)
                    <li>{{$e}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text"
            class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" required value="{{old('nombre')}}">
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Elegir Archivo</label>
            <input type="file" class="form-control" name="img" id="" placeholder="" aria-describedby="fileHelpId">
            <div id="fileHelpId" class="form-text">Help text</div>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number"
            class="form-control" name="precio" id="precio" placeholder="" aria-describedby="fileHelpId">
            <div id="fileHelpId" class="form-text">Help text</div>
        </div>
        <!-- <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" min="1"
            class="form-control" name="stock" id="stock" placeholder="" aria-describedby="fileHelpId">
            <div id="fileHelpId" class="form-text">Help text</div>
        </div> -->
        <!-- <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria del producto</label>
            <select class="form-select form-select-lg" name="categoria_id" id="categoria_id">
                <option selected>Seleccione una categoria</option>
                {{-- mejorar acerca de los productos los id --}}
                @foreach ($listacat as $cat)
                    <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                @endforeach
            </select>
        </div> -->
        <button type="submit" class="btn btn-primary">Guardar Informacion</button>
    </form>
</div>
@endsection
