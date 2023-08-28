@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Tipos de Proyectos</h1>
    <form action= "{{url('tipoproyecto/insertartipoproyecto')}}" method= "POST" >
        @csrf
        <div class="row">
        <div class="col-sm-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el código">
        </div>
        <div class="col-sm-4">
            <label for="estaactivo" class="form-label">Esta Activo</label>
            <input type="checkbox" name="estaactivo">
        </div>
</div>
<br>
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
