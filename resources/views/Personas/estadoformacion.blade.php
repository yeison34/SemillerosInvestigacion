@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="breadcrumb mb-4">Estados Formacion</h1>
@stop

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                <li class="breadcrumb-item active">Estados Formacion</li>
            </ol>
            <div style="margin:8px">
                <a class="btn btn-success" href="/estadoformacion/estadoformacionform">Adicionar</a>
            </div>    
            <div class="card mb-4">
              
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                        Listado Estados Formacion
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
                            @foreach ($estadoformacion as $items )
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$items->nombre}}</td>
                                <td><input type="checkbox" {{ $items->estaactivo ? 'checked' : '' }} disabled></td>
                                <td>
                                    <a href="{{url('/estadoformacion/editarestadoformacion',$items->id)}}" class="btn btn-info">Editar</a>
                                    <a href="{{url('/estadoformacion/eliminarestadoformacion',$items->id)}}" class="btn btn-danger">Eliminar</a>
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


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estados Formación</h1>
@stop

@section('content')
    <p>Listado Estados Formación</p>
    <a class="btn btn-success" href="/estadoformacion/registrar">Adicionar</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Estado Activo</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($estadoformacion as $items )
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$items->nombre}}</td>
                <td><input type="checkbox" {{ $items->estaactivo ? 'checked' : '' }} disabled></td>
                <td>
                    <a href="{{url('/estadoformacion/editar',$items->id)}}" class="btn btn-info">Editar</a>
                    <a href="{{url('/estadoformacion/eliminar',$items->id)}}" class="btn btn-danger">Eliminar</a>
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