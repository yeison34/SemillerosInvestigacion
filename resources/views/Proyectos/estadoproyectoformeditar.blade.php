@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Tipo de Proyecto</h1>
    <form action= "{{url('estadoproyecto/guardaredicionestadoproyecto')}}" method= "POST" >
        @csrf
        <input type="hidden" name="id" value="{{$estadoproyecto->id}}">
        <div class="row">
        <div class="col-sm-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$estadoproyecto->nombre}}" placeholder="Ingrese el Nombre">
        </div>
        <div class="col-sm-4">
            <label for="estaactivo" class="form-label">Esta Activo</label>
            <input type="checkbox" {{$estadoproyecto->estaactivo?'checked':''}} name="estaactivo">
        </div>
</div>
<br>
        <button type="submit" class="btn btn-success">Guardar</button>
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