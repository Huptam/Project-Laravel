@extends('adminlte::page')

@section('title', 'DistroApp - Dashboard')

@section('content_header')
    <h1>Gestionar Categorías</h1>
@stop

@section('content')
<div class="card-body">
    <table id="categories">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Creado</th>
                <th>Actualizado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Creado</th>
                <th>Actualizado</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                    <td>
                        <a href="{{ url('/editCategory/'.$category->id) }}" title="Editar" class="btn btn-primary">
                            <i class="fas fa-edit" title="Editar"></i></a>
                        <form method="POST" action="{{ url('/deleteCategory/'.$category->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-delete" title="Eliminar"
                                onclick="return confirm(&quot; ¿Realmente desea eliminar esta categoría? &quot;)"><i
                                    class="fas fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#categories').DataTable();
        });
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
@stop
