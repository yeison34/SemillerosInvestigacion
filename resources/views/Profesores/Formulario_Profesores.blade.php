@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Profesores</h1>
    <form action= "{{url('profesores/registrar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="codigoFacultad" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoProfesor" name="codigoProfesor" placeholder="Ingrese el código" required/>
        </div>

        <div class="mb-3">
            <label for="nombreFacultad" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreProfesor" name="nombreProfesor" placeholder="Ingrese el nombre" required/>
        </div>

        <div class="mb-3">
            <label for="nombreFacultad" class="form-label">Categoria</label>
            <input type="text" class="form-control" id="Categoria" name="Categoria" placeholder="Ingrese la categoria" required/>
        </div>

        <button type="submit" class="btn btn-success">Registrar</button>
    </form>


@stop

@section('content')
   

@stop