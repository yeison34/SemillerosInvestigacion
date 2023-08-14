@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Facultades</h1>
    <form action= "{{url('facultades/registrar')}}" method= "POST" >
        @csrf
        <div class="row">
        <div class="mb-4">
            <label for="nombre" class="form-label">nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
        </div>

        <div class="mb-4">
            <label for="estaactivo" class="form-label">Esta Activo</label>
            <input type="checkbox" class="form-control" id="estaactivo" name="estaactivo">
        </div>
        </div>
        <button type="submit" class="btn btn-success">Registrar</button>
    </form>


@stop

@section('content')
   

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
