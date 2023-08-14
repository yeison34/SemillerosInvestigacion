@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ciudades</h1>
@stop

@section('content')
    <p>Listado de Ciudades</p>
    <a class="btn btn-success" href="/ciudad/registrar">Adicionar</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Departamento</th>
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
                <td> Nariño</td>
                <td><input type="checkbox" value="true"></td>
                <td>
                    <a href="" class="btn btn-info">Editar</a>
                    <a href="" class="btn btn-danger">Eliminar</a>
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