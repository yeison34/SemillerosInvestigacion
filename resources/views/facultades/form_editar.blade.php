@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Facultad</h1>
    <form action= "{{url('facultades/editar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="codigoFacultad" class="form-label">Código</label>
            <input type="hidden" class="form-control" id="codigoFacultad" name="codFacultad" readonly placeholder="Ingrese el código" value='{{$modelo->codFacultad}}'>
        </div>

        <div class="mb-3">
            <label for="codigoFacultad" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoFacultad" name="codigoFacultad" readonly placeholder="Ingrese el código" value='{{$modelo->codFacultad}}'>
        </div>

        <div class="mb-3">
            <label for="nombreFacultad" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreFacultad" name="nomFacultad" placeholder="Ingrese el nombre" value='{{$modelo->nomFacultad}}'>
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
