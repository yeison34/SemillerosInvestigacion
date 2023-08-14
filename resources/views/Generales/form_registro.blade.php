@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Ciudades</h1>
    <form action= "{{url('generales/ciudad')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="ciudad" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese ciudad" required>
        </div>

        <div class="mb-3">
            <label for="nombreFacultad" class="form-label">Departamento</label>
            <input type="number" class="form-control" id="depa" name="depa" placeholder="Ingrese departamento" required>
        </div>
        <div class="mb-3">
        <label for="nombreFacultad" class="form-label">Esta Activo</label>
        <input type="checkbox" class="form-control" id="chek" name="ckek" >
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