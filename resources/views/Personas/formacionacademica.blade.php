@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Formación Academica</h1>
@stop

@section('content')
    <p>Listado Formacion Academica</p>

    <a class="btn btn-success" href="{{url('/formacionacademica/formacionacademicaform',$idpersona)}}">Adicionar</a>
    <div style="width: 100%;overflow-x: auto;">
    <table class="table" style="width: 100%;overflow-x: auto; white-space: nowrap;">
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
            @foreach ($formacionacademica as $items )
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$items->nivelestudio->nombre}}</td>
                <td>{{$items->titulo->nombre}}</td>
                <td>{{$items->estadoformacion->nombre}}</td>
                <td>{{$items->institucionformacion->nombre}}</td>
                <td>{{$items->periodoinicio}}</td>
                <td><input type="checkbox" {{ $items->esactual ? 'checked' : '' }} disabled></td>
                <td>{{$items->periodofinal}}</td>
                <td><input type="checkbox" {{ $items->estaactivo ? 'checked' : '' }} disabled></td>
                <td>
                    <a href="{{url('/formacionacademica/editarformacionacademica',$items->id)}}" class="btn btn-info">Editar</a>
                    <a href="{{url('/formacionacademica/eliminarformacionacademica',$items->id)}}" class="btn btn-danger">Eliminar</a>
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
