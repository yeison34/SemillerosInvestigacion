@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Departamento</h1>
@stop

@section('content')
    <h1>Registro de Departamentos</h1>
    <form action="{{url('generales/reg_depa')}}" method="post">
        <label for="nombreDep">Nombre Departamento </label>
        <input type="text" id='nombreDep' name="nombreDep" class="form-control"> <br>
        <label for="IdPais">Esta activo </label>
        <input type="checkbox" id='estaactivo' name="estaactivo" class="form-control"> <br>
        <button type="submit" class="btn btn-success">Guardar</button>
        @csrf
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop