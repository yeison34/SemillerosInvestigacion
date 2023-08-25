@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="breadcrumb mb-4">Personas</h1>
@stop

@section('content')
<div id="layoutSidenav_content">
    <main>
    <div style="width: 100%;overflow-x: auto;">
        <div class="container-fluid px-4" style="width:100vw">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                <li class="breadcrumb-item active">Personas</li>
            </ol>
            <div style="margin:8px">
                <a class="btn btn-info" href="/persona/personaform">Adicionar</a>
            </div>    
            <div class="card mb-4" style="width: 100%;overflow-x: auto; white-space: nowrap;">
              
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                        Listado Personas
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tipo Identificación</th>
                                <th scope="col">Identificación</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Fecha Nacimiento</th>
                                <th scope="col">Genero</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tipo Identificación</th>
                                <th scope="col">Identificación</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Fecha Nacimiento</th>
                                <th scope="col">Genero</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($persona as $items)
                            <tr>
                                <td scope="row">{{$i}}</td>
                                <td scope="col">{{$items->tipoidentificacion->nombre}}</td>
                                <td scope="col">{{$items->identificacion}}</td>
                                <td scope="col">{{$items->nombre}}</td>
                                <td scope="col">{{$items->apellido}}</td>
                                <td scope="col">{{$items->fechanacimiento}}</td>
                                <td scope="col">{{$items->genero}}</td>
                                <td scope="col">{{$items->ciudad->nombre}}</td>
                                <td scope="col">{{$items->direccion}}</td>
                                <td scope="col">
                                    <a href="{{url('departamento/editar',$items->id)}}" class="btn btn-info">Editar</a>
                                </td>
                                <td scope="col">
                                    <a href="{{url('persona/editarpersona',$items->id)}}" class="btn btn-info">Editar</a>
                                    <a href="{{url('persona/eliminarpersona',$items->id)}}" class="btn btn-danger">Eliminar</a>
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