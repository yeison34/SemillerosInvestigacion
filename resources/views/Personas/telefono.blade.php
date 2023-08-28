@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Telefono</h1>
@stop

@section('content')
    <p>Registro de telefono</p>

    <a class="btn btn-success" href="{{url('/telefono/telefonoform',$idpersona)}}">Adicionar</a>
    <div style="width: 100%;overflow-x: auto;">
    <table class="table" style="width: 100%;overflow-x: auto; white-space: nowrap;">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Telefono</th>
            <th scope="col">Principal</th>
            <th scope="col">Esta Activo</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
        @php
                $i=1;
            @endphp
            @foreach ($telefono as $items )
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$items->telefono}}</td>
                <td><input type="checkbox" {{ $items->esprincipal ? 'checked' : '' }} disabled></td>
                <td><input type="checkbox" {{ $items->estaactivo ? 'checked' : '' }} disabled></td>
                <td>
                    <a href="{{url('/telefono/editartelefono',$items->id)}}" class="btn btn-info">Editar</a>
                    <a href="{{url('/telefono/eliminartelefono',$items->id)}}" class="btn btn-danger">Eliminar</a>
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
