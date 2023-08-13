@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ESTUDIANTES</h1>
@stop

@section('content')
<p>Listado de Estudiantes</p>

    <a class="btn btn-success" href="/estudiantes/formulario">Adicionar</a>

    <div style="background-image: url('https://i.pinimg.com/564x/0c/54/db/0c54db98b69b44b03a286ec9609cfe57.jpg'); background-size: cover; background-position: center;">

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Edad</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Sexo</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Barrio</th>
            <th scope="col">Programa</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $i=1;
            @endphp
            @foreach ($estudiante as $f)
            <tr>
                <th scope="row">{{$i}}</th>
                <td> {{ $f->codestudiante}}</td>
                <td> {{ $f->nomestudiante}}</td>
                <td> {{ $f->edaestudiante}}</td>
                <td> {{ $f->fechestudiante}}</td>
                <td> {{ $f->sexestudiante}}</td>
                <td> {{ $f->nomciudad }}</td>
                <td> {{$f->nombarrio}}</td>
                <td> {{$f->nomPrograma}}</td>
                <td>
                    <a class="btn btn-primary">Editar</a>
                    <a class="btn btn-danger" href="{{route('eliminarEstu',$f->codestudiante)}}">Eliminar</a>
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
