@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar Pais</h1>
@stop

@section('content')
    <form action= "{{url('generales/pais/agregar')}}" method= "POST" class="container-fluid mt-4" >
        @csrf
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th class="text-center" scope="col">Esta Activo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="col-mb-2">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del pais">
                        </div>
                    </td>
                    <td> 
                        <div class="col-mb-2">
                            <input type="checkbox" class="form-control" name="esactivo" value="1" >
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="mx-3">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop