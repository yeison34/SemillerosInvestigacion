@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDITAR COORDINADOR</h1>
    <div class="container">
<br>
    <form action= "{{url('coordinadores/guardaredicioncoordinador')}}" method= "POST" enctype="multipart/form-data">
        @csrf
        <br>
        <div class="row">
            <div class="col-sm-3"><a href="{{asset('coordinador/adjuntos/'.$coordinador->acuerdodenombramiento)}}"class="btn btn-success {{$coordinador->acuerdodenombramiento!=null?'visible':'oculto'}}">Ver Reporte</a></div>
            <div class="col-sm-6"></div>
            <div class="col-sm-3">
                <label for="estaactivo" class="form-label">Esta Activo</label>
                <input type="checkbox" id="estaactivo" name="estaactivo" {{$coordinador->estaactivo?'checked':''}} placeholder="Ingrese el código">
            </div>
        </div>
        <input type="hidden" name="id" value="{{$coordinador->id}}">
        <br>
        <div class="row">
          
            </div>
        </div>
        <br>
        <div class="row">
        <div class="col-sm-3">
                <label for="idsede" class="form-label">Sede</label>
                <select name="idsede" class="form-control">
                    @foreach($sede as $items)
                    <option value="{{ $items->id }}" @if($items->id == $coordinador->idsede) selected @endif>{{ $items->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <label for="idpersona" class="form-label">Identificacion</label>
                <select name="idpersona" class="form-control">
                    <option value="null">Seleccionar</option>
                    @foreach($persona as $items)
                    <option value="{{ $items->id }}" @if($items->id == $coordinador->idpersona) selected @endif>{{ $items->nombre }}, {{ $items->apellido }}
                    </option>

                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <label for="codigo" class="form-label">Codigo</label>
                <input type="text" value="{{$coordinador->codigo}}" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el código">
            </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <label for="idprograma" class="form-label">Programa</label>
                <select name="idprograma" class="form-control">
                    @foreach($programa as $items)
                    <option value="{{ $items->id }}" @if($items->id == $coordinador->idprograma) selected @endif>{{ $items->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <label for="idsemillero" class="form-label">Semillero</label>
                <select name="idsemillero" class="form-control">
                    @foreach($semillero as $items)
                    <option value="{{ $items->id }}" @if($items->id == $coordinador->idsemillero) selected @endif>{{ $items->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-sm-3">
                <label for="fechavinculacion" class="form-label">Fecha Nacimiento</label>
                <input type="date" value="{{ date('Y-m-d', strtotime($coordinador->fechavinculacion)) !== '1970-01-01' ? date('Y-m-d', strtotime($coordinador->fechavinculacion)) : '' }}" class="form-control" id="apellidcoordinador=" name="fechavinculacion" placeholder="Ingrese el código">
            </div>
            <div>
                <div class="row">
            <div class="col-sm-3">
                <label for="acuerdodenombramiento" class="form-label">Acuerdo De Nombramiento</label>
                <input type="file" accept=".docx,.pdf" class="form-control" name="acuerdodenombramiento" placeholder="foto">
            </div>
            </div>
        <br>
        <div class="col-sm-3">
                <br>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{url('coordinadores/coordinador')}}" class="btn btn-info">Cancelar</a>
            </div>
        <div>
        <br>

    </form>
    </div>
@stop

@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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
        .container {
            text-align: center;
            margin-top: 20px;
        }
        .row {
            margin-top: 10px;
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
