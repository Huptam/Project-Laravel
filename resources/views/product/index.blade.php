@extends('adminlte::page')

@section('title', 'DistroApp - Dashboard')

@section('content_header')
    <h1>Gestionar Productos</h1>
@stop

@section('content')
<div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tabla de Productos
        </div>
        <div class="card-body">
            <table id="products" >
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Código de Barra</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Categoría</th>
                        <th>Creado</th>
                        <th>Actualizado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Código de Barra</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Categoría</th>
                        <th>Creado</th>
                        <th>Actualizado</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
                <tbody>@foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>
                                <img class="product-img" src="{{ Storage::url($product->image) }}" width="100">
                            </td>
                            <td>{{ $product->barcode }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                @foreach ($categories as $category)
                                    @if ($category->id == $product->category_id)
                                        {{$product->category_id}}
                                        <strong>{{' ('.$category->name.')'}}</strong>
                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->updated_at }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Show
                                  </button>
                                @include('product.show')
                                <a href="{{url('/editProduct/'.$product->id)}}" title="Editar" class="btn btn-primary">
                                <i class="fas fa-edit" title="Editar"></i></a>
                                <form method="POST" action="{{ url('/deleteProduct/'.$product->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-delete" title="Eliminar" onclick="return confirm(&quot; ¿Realmente desea eliminar este producto? &quot;)"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#products').DataTable();
        });
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
@stop
