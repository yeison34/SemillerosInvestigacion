@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Institución Formación</h1>
@stop

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/personas/nivelestudio">Inicio</a></li>
                <li class="breadcrumb-item active">Listado Instituciones</li>
            </ol>
            <div style="margin:8px">
                <a class="btn btn-success" href="/institucionformacion/institucionformacionform">Adicionar</a>
            </div>    
            <div class="card mb-4">
              
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                        Listado Estados Instituciones
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Esta Activo</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pais</th>
                                <th scope="col">Esta Activo</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @php
                $i=1;
            @endphp
            @foreach ($institucionformacion as $items )
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$items->nombre}}</td>
                <td><input type="checkbox" {{ $items->estaactivo ? 'checked' : '' }} disabled></td>
                <td>
                    <a href="{{url('/institucionformacion/editarinstitucionformacion',$items->id)}}" class="btn btn-info">Editar</a>
                    <a href="{{url('/institucionformacion/eliminarinstitucionformacion',$items->id)}}" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            @php
                $i = $i +1
            @endphp
            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <main>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />

@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop