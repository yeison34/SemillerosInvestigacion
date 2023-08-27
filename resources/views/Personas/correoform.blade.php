@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Correos</h1>
@stop

@section('content')
<form action= "{{url('/correo/insertarcorreo')}}" method= "POST" >
        @csrf
        <input type="hidden" value="{{$idpersona}}" name="idpersona">
        <div class="row">
        <div class="col-sm-4">
            <label for="Correo" class="form-label">correo</label>
            <input type="email" class="form-control" id="email" name="email">
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
