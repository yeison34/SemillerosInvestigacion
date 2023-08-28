@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Correo</h1>
@stop

@section('content')
<form action= "{{url('correo/guardaredicioncorreo')}}" method= "POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{$correo->id}}" name="id">
        <input type="hidden" value="{{$correo->idpersona}}" name="idpersona">
        <div class="row">
        <div class="col-sm-4">
            <label for="correo" class="form-label">Email</label>
            <input type="email"  value="{{$correo->email}}" class="form-control" id="email" name="email">
        </div>
        <div class="col-sm-4">
            <label for="esprincipal"  class="form-label">Principal</label>
            <input type="checkbox" name="esprincipal" {{$correo->esprincipal?'checked':''}} >
            <label for="estaactivo"  class="form-label">Esta Activo</label>
            <input type="checkbox"  name="estaactivo" {{$correo->estaactivo?'checked':''}}>
        </div>
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
