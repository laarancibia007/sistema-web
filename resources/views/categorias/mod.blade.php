@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-m6">
        <h1>Formulario de Modificacion de categorias</h1>

    </div>
</div>
{{-- {{var_dump($cat)}} --}}
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
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text"
            class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" required value="{{old('nombre',$cat->nombre)}}">
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <img src="{{asset('storage/'.$cat->img)}}" alt="" class="img-fluid" width="300">
            <label for="" class="form-label">Elegir Archivo</label>
            <input type="file" class="form-control" name="img" id="" placeholder="" aria-describedby="fileHelpId">
            <div id="fileHelpId" class="form-text">Help text</div>
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
</div>
@endsection
