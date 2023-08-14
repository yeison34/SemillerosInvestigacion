@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Departamento</h1>
@stop

@section('content')
    <p>Listado de Departamentos</p>
    <a class="btn btn-success" href="generales/reg_departamento">Adicionar</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Pais</th>
            <th scope="col">Esta Activo</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($departamentos as $items)
            <tr>
                <th scope="row">{{$i}}</th>
                <td> {{$items->nombre}}</td>
                <td> {{$items->paises->nombre}}</td>
                <td><input type="checkbox" {{$items->estaactivo?'checked':''}} disabled></td>
                <td>
                    <a href="{{url('departamento/editar',$items->id)}}" class="btn btn-info">Editar</a>
                    <a href="{{url('departamento/eliminar',$items->id)}}" class="btn btn-danger">Eliminar</a>
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