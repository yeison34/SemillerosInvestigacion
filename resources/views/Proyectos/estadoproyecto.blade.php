@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Sedes</h1>
@stop

@section('content')
    <p>Listado de Estados Proyectos</p>
    <a class="btn btn-success" href="/estadoproyecto/estadoproyectoform">Adicionar</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Esta Activo</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($estadoproyecto as $items )
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$items->nombre}}</td>
                <td><input type="checkbox" {{ $items->estaactivo ? 'checked' : '' }} disabled></td>
                <td>
                    <a href="{{url('/estadoproyecto/editarestadoproyecto',$items->id)}}" class="btn btn-info">Editar</a>
                    <a href="{{url('/estadoproyecto/eliminarestadoproyecto',$items->id)}}" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            @php
                $i = $i +1
            @endphp
            @endforeach
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