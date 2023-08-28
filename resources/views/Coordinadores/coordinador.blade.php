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
                    <a href="{{url('/coordinadores/editarcoordinador',$items->id)}}" class="btn btn-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16">
                                <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.39 3.39 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3.122 3.122 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043.002.001h-.002z"/>
                                </svg>
                    </a>
                    <a href="/pdf" class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                    </a>
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