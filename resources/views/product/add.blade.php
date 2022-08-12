@extends('adminlte::page')

@section('title', 'DistroApp - Dashboard')

@section('content_header')
    <h1>Agregar Producto</h1>
@stop

@section('content')
    <div>
        <div class="card shadow-lg border-0 rounded-lg mt-10">
            <div class="card-body">
                <form action="{{ route('storeProduct') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" id="name" name="name" type="text"
                                    placeholder="Digite el nombre del producto" value="{{ old('name') }}" />
                                <label for="nombre">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="description" name="description" type="text"
                                    placeholder="Digite una descripcion" value="{{ old('description') }}" />
                                <label for="descripcion">Descripción</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" id="image" name="image" type="file"
                                    placeholder="Adjunte la imagen al producto"" />
                                <label for="imagen">Adjuntar Imagen</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="barcode" name="barcode" type="number"
                                    placeholder="Digite el código de barra" value="{{ old('barcode') }}" min="1" />
                                <label for="codigoBarra">Código de Barra</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="quantity" name="quantity"type="number"
                                    placeholder="Digite la fecha de vencimiento" value="{{ old('quantity') }}"
                                    min="1" />
                                <label for="cantidad">Cantidad</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="price" name="price" type="number"
                                    placeholder="Digite el precio del producto" value="{{ old('price') }}"
                                    min="1" />
                                <label for="precio">Precio</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid">
                            <label for="category">Categoría</label>
                            <select name="category" class="form-control"  id="category">
                                <option value="" disabled selected hidden> Escoja una categoría </option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" >{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-block">Añadir Producto</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
