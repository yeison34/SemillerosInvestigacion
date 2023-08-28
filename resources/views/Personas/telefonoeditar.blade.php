@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar de telefonos</h1>
@stop

@section('content')
<form action= "{{url('telefono/guardarediciontelefono')}}" method= "POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{$telefono->id}}" name="id">
        <input type="hidden" value="{{$telefono->idpersona}}" name="idpersona">
        <div class="row">
        <div class="col-sm-4">
            <label for="telefono" class="form-label">telefono</label>
            <input type="number"  value="{{$telefono->telefono}}" class="form-control" id="telefono" name="telefono">
        </div>
        <div class="col-sm-4">
            <label for="esprincipal"  class="form-label">Principal</label>
            <input type="checkbox" name="esprincipal" {{$telefono->esprincipal?'checked':''}} >
            <label for="estaactivo"  class="form-label">Esta Activo</label>
            <input type="checkbox"  name="estaactivo" {{$telefono->estaactivo?'checked':''}} >
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
