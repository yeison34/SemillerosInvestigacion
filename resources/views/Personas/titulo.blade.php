@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Titulos Formacion</h1>
@stop

@section('content')
    <p>Listado Titulos</p>
    <a class="btn btn-success" href="/titulo/registrartitulo">Adicionar</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nivel Estudio</th>
            <th scope="col">Esta Activo</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
        @php
                $i=1;
            @endphp
            @foreach ($titulo as $items )
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$items->nombre}}</td>
                <td>{{$items->nivelestudio->nombre}}</td>
                <td><input type="checkbox" {{ $items->estaactivo ? 'checked' : '' }} disabled></td>
                <td>
                    <a href="{{url('/titulo/editartitulo',$items->id)}}" class="btn btn-info">Editar</a>
                    <a href="{{url('/titulo/eliminartitulo',$items->id)}}" class="btn btn-danger">Eliminar</a>
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