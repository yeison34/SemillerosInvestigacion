@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Clasificaion</h1>
@stop

@section('content')
<form action= "{{url('clasificacion/guardaredicionclasificacionevento')}}" method= "POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{$evento->id}}" name="id">
        <div class="row">
        <div class="col-sm-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text"  value="{{$evento->nombre}}" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="col-sm-4">
            <label for="estaactivo" class="form-label">Esta Activo</label>
            <input type="checkbox" name="estaactivo" {{$evento->estaactivo?'checked':''}}>
        </div>
<br>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
