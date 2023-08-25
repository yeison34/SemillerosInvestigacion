@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Semilleros</h1>
@stop

@section('content')
    <p>Listado de Semilleros</p>
    <a class="btn btn-success" href="/semillero/semilleroform">Adicionar</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Sede</th>
            <th scope="col">Correo</th>
            <th scope="col">Descripción</th>
            <th scope="col">Esta Activo</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($semillero as $items )
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$items->nombre}}</td>
                <td>{{$items->sede->nombre}}</td>
                <td>{{$items->correo}}</td>
                <td>{{$items->descripcion}}</td>
                <td><input type="checkbox" {{ $items->estaactivo ? 'checked' : '' }} disabled></td>
                <td>
                    <a href="{{url('/semillero/editarsemillero',$items->id)}}" class="btn btn-info">Editar</a>
                    <a href="{{url('/semillero/eliminarsemillero',$items->id)}}" class="btn btn-danger">Eliminar</a>
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