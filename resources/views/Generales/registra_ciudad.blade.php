@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Facultad</h1>
    <form action= "{{url('generales/ciudad')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="codigoFacultad" name="codFacultad" >
        </div>

        <div class="mb-3">
            <label for="nombreFacultad" class="form-label">Departamento</label>
            <input type="text" class="form-control" id="nombreFacultad" name="nomFacultad">
        </div>
        <div class="mb-3">
        <label for="nombreFacultad" class="form-label">Esta Activo</label>
        <input type="checkbox" class="form-control" id="chek" name="ckek" >
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