@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programas</h1>
@stop

@section('content')
    <p>Listado de Programas</p>
    <a class="btn btn-success" href="{{url('/programa/programaform')}}">Adicionar</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Facultad</th>
            <th scope="col">Esta Activo</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($programa as $f)
            <tr>
                <th scope="row">{{$i}}</th>
                <td> {{ $f->nombre}}</td>
                <td> {{ $f->facultad->nombre}}</td>
                <td> <input type="checkbox" {{$f->estaactivo?'checked':''}}></td>
                <td>
                    <a class="btn btn-info" href="{{url('programa/editarprograma',$f->id)}}">Editar</a>
                    <a class="btn btn-danger" href="{{url('programa/eliminarprograma',$f->id)}}">Eliminar</a>
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
