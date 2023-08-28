@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>TABLA COORDINADORES</h1>
@stop

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/coordinadores/coordinador">Inicio</a></li>
                
                <li class="breadcrumb-item active">Coordinadores</li>
            </ol>
            <div style="margin:8px">
                <a class="btn btn-success" href="/coordinadores/coordinadorform">Adicionar</a>
                <a class="btn btn-danger" href="/coordinadores/generarpdf">GENERAR PDF</a>

            </div>    
            <div class="card mb-4">
              
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Listado De Coordinadores
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                 <th scope="col">#</th>
                                <th scope="col">Sede</th>
                                <th scope="col">Identificación</th>
                                <th scope="col">Codigo</th>
                                <th scope="col">Programa</th>
                                <th scope="col">Fecha Vinculacion</th>
                                <th scope="col">Acuerdo De Nombramiento</th>
                                <th scope="col">Activo</th>
                                <t scope="col">Semillero</t>
                                <th scope="col">Semillero</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($coordinador as $items )
                                <tr>
                                <td scope="row">{{$i}}</td>
                                <td scope="col">{{$items->sede->nombre}}</td>
                                <td scope="col">{{$items->persona->identificacion}}</td>
                                <td scope="col">{{$items->codigo}}</td>
                                <td scope="col">{{$items->programa->nombre}}</td>
                                <td scope="col">{{$items->fechavinculacion}}</td>
                                <th scope="col"><a class="{{$items->acuerdodenombramiento!=null?'visible':'oculto'}}" href="{{asset('coordinador/adjuntos/'.$items->acuerdodenombramiento)}}">Ver Reporte</a></th>
                                <td scope="col"><input type="checkbox" {{$items->estaactivo?'checked':''}} disabled></td>
                                <td scope="col">{{$items->semillero->nombre}}</td>
                                <td scope="col">
                    <a href="{{url('/coordinadores/editarcoordinador',$items->id)}}" class="btn btn-info">Editar</a>
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
    <style>
        .visible{
            display:block;
        }

        .oculto{
            display:none;
        }
        table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop