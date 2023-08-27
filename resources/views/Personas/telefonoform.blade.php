@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de telefonos</h1>
    <form action= "{{url('/telefono/insertartelefono')}}" method= "POST" >
        @csrf
        <input type="hidden" value="{{$idpersona}}" name="idpersona">
        <div class="row">
        <div class="col-sm-4">
            <label for="telefono" class="form-label">telefono</label>
            <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el nombre">
        </div>
        <div class="col-sm-4">
            <label for="esprincipal" class="form-label">Principal</label>
            <input type="checkbox" name="esprincipal">

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
