@extends('adminlte::page')

@section('title', 'DistroApp - Dashboard')

@section('content_header')
    <h1>Editar Categoría</h1>
@stop

@section('content')
    <form action="{{ url('/updateCategory/'.$category->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name"
                placeholder="Digite el nombre de la categoría" value="{{$category->name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="description" id="description"
                placeholder="Digite una descripción" value="{{$category->description}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
