@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PROFESORES</h1>
@stop

@section('content')
    <p>Listado de Profesores</p>
    <a class="btn btn-success" href="/profesores/formulario">Adicionar</a>
    <div style="background-image: url('https://i.pinimg.com/236x/f6/1c/9d/f61c9d7ebfda9f351fe54f022ab0ae94.jpg'); background-size: cover; background-position: center;">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria</th></th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $i=1;
            @endphp
            @foreach ($profesor as $f)
            <tr>
                <th scope="row">{{$i}}</th>
                <td> {{ $f->codprofesor}}</td>
                <td> {{ $f->nomprofesor}}</td>
                <td> {{ $f->catprofesor}}</td>
                <td>
                    <a class="btn btn-primary">Editar</a>
                    <a class="btn btn-danger" href="{{route('eliminarPro',$f->codprofesor)}}">Eliminar</a>

                </td>
            </tr>
            @php
                $i = $i +1
            @endphp
            @endforeach
        </tbody>
    </table>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
