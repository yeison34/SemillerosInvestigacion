@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pais</h1>
@stop

@section('content')
    <p>Listado de Paises</p>
    <a class="btn btn-success m-3" href="/generales/pais/agregar">Adicionar</a>
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
            @foreach ($paises as $p)
            <tr>
                <th scope="row">{{$i}}</th>
                <td> {{ $p-> nombre }}</td>
                <td>
                    <input type="checkbox" value="estaactivo" {{ $p->estaactivo ? 'checked' : '' }} disabled>
                </td>
                <td>
                    <a class="btn btn-info" href="{{route('editarpais',$p->id)}}">Editar</a>
                    <a class="btn btn-danger" href="{{route('eliminapais',$p->id)}}">Eliminar</a>
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