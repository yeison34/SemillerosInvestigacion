@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Formación Academica</h1>
@stop

@section('content')
    <p>Listado Formacion Academica</p>
    <a class="btn btn-success" href="/programas/registrar">Adicionar</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nivel Estudio</th>
            <th scope="col">Titulo</th>
            <th scope="col">Estado Formación</th>
            <th scope="col">Institución Formación</th>
            <th scope="col">Periodo Inicio</th>
            <th scope="col">Es Actual</th>
            <th scope="col">Periodo Final</th>
            <th scope="col">Esta Activo</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @for ($item=0;$item<1;$item++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td> Pasto</td>
                <td> Otro</td>
                <td> Pasto</td>
                <td> Otro</td>
                <td> Pasto</td>
                <td> Otro</td>
                <td> Pasto</td>
                <td><input type="checkbox" value="true"></td>
                <td>
                    <a href="#" class="btn btn-info">Editar</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            @php
                $i = $i +1
            @endphp
            @endfor
        </tbody>
    </table>



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