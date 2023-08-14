@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Facultad</h1>
    <form action= "{{url('facultades/editar')}}" method= "POST" >
        @csrf
        <div class="row">
        <div class="mb-3">
            <input type="hidden" class="form-control" id="id" name="id" value='{{$modelo->codFacultad}}'>
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Ingrese el código" value='{{$modelo->nombre}}'>
        </div>

        <div class="mb-3">
            <label for="nombreFacultad" class="form-label">Esta Activo</label>
            <input type="checkbox" class="form-control" id="estaactivo" name="estaactivo" {{ $modelo->estaactivo?'checked':''}}>
        </div>
        </div>
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
