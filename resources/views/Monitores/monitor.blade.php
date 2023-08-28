@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="breadcrumb mb-4">Monitores</h1>
@stop

@section('content')
<div id="layoutSidenav_content">
    <main>
    <div style="width: 100%;overflow-x: auto;">
        <div class="container-fluid px-4" style="width:100vw">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                <li class="breadcrumb-item active">Monitores</li>
            </ol>
            <div style="margin:8px">
                <a class="btn btn-info" href="{{url('/monitor/monitorform')}}">Adicionar</a>
            </div>    
            <div class="card mb-4" style="width: 100%;overflow-x: auto; white-space: nowrap;">
              
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                        Listado Monitores
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Identificación</th>
                                <th scope="col">Sede</th>
                                <th scope="col">Programa</th>
                                <th scope="col">Semillero</th>
                                <th scope="col">Fecha Vinculación</th>
                                <th scope="col">Reporte de Matricula</th>
                                <th scope="col">Acuerdo De Nombramiento</th>
                                <th scope="col">Esta Activo</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Identificación</th>
                                <th scope="col">Sede</th>
                                <th scope="col">Programa</th>
                                <th scope="col">Semillero</th>
                                <th scope="col">Fecha Vinculación</th>
                                <th scope="col">Reporte de Matricula</th>
                                <th scope="col">Acuerdo De Nombramiento</th>
                                <th scope="col">Esta Activo</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($monitor as $items)
                            <tr>
                                <td scope="row">{{$i}}</td>
                                <td scope="col">{{$items->codigo}}</td>
                                <td scope="col">{{$items->persona->nombre}}</td>
                                <td scope="col">{{$items->persona->apellido}}</td>
                                <td scope="col">{{$items->persona->identificacion}}</td>
                                <td scope="col">{{$items->sede->nombre}}</td>
                                <td scope="col">{{$items->programa->nombre}}</td>
                                <td scope="col">{{$items->semillero->nombre}}</td>
                                <td scope="col">{{$items->fechavinculacion}}</td>
                                <th scope="col"><a class="{{$items->reportematricula!=null?'visible':'oculto'}}" href="{{asset('monitores/reportesmatricula/'.$items->reportematricula)}}">Ver Reporte</a></th>
                                <th scope="col"><a class="{{$items->acuerdodenombramiento!=null?'visible':'oculto'}}" href="{{asset('monitores/adjuntos/'.$items->acuerdodenombramiento)}}">Ver Acuerdo</a></th>
                                <td scope="col"><input type="checkbox" {{$items->estaactivo?'checked':''}} disabled></td>
                                <td scope="col">
                                    <a href="{{url('monitor/editarmonitor',$items->id)}}" class="btn btn-info">Editar</a>
                                    <a href="{{url('monitor/eliminarmonitor',$items->id)}}" class="btn btn-danger">Eliminar</a>
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
    <style>
        .visible{
            display:block;
        }

        .oculto{
            display:none;
        }
    </style>    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
@stop