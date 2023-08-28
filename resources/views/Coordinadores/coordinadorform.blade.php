@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>REGISTRO DE COORDINADORES</h1>
    <form action= "{{url('coordinadores/insertarcoordinador')}}" method= "POST" enctype="multipart/form-data">
        @csrf
        <br>
        <div class="row">
            <div class="col-sm-9"></div>
            <div class="col-sm-3">
                <label for="estaactivo" class="form-label">Esta Activo</label>
                <input type="checkbox" id="estaactivo" name="estaactivo" placeholder="Ingrese el código">
            </div>
        </div>
        <br>
        <div class="row">
        <div class="col-sm-3">
                <label for="idsede" class="form-label">Sede</label>
                <select name="idsede" class="form-control">
                    <option value="null">Seleccionar</option>
                    @foreach($sede as $items)
                        <option value="{{$items->id}}">{{$items->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <label for="idpersona" class="form-label">Persona</label>
                <select name="idpersona" class="form-control">
                    <option value="null">Seleccionar</option>
                    @foreach($persona as $items)
                        <option value="{{$items->id}}">{{$items->nombre ." " . $items->apellido}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <label for="semestre" class="form-label">Codigo</label>
                <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el código">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <label for="idprograma" class="form-label">Programa</label>
                <select name="idprograma" class="form-control">
                    <option value="null">Seleccionar</option>
                    @foreach($programa as $items)
                        <option value="{{$items->id}}">{{$items->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <label for="idsemillero" class="form-label">Semillero</label>
                <select name="idsemillero" class="form-control">
                    <option value="null">Seleccionar</option>
                    @foreach($semillero as $items)
                        <option value="{{$items->id}}">{{$items->nombre}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-sm-3">
                <label for="fechavinculacion" class="form-label">Fecha Vinculación</label>
                <input type="date" class="form-control" id="fechavinculacion" name="fechavinculacion" placeholder="Ingrese el código">
            </div>

            </div>
            <br>
            <div class="col-sm-3">
                <label for="acuerdodenombramiento" class="form-label">Acuerdo De Nombramiento</label>
                <input type="file" accept=".docx,.pdf" class="form-control" name="acuerdodenombramiento">
            </div>
        <br>
        <div class="col-sm-3">
                <br>
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{url('coordinadores/coordinador')}}" class="btn btn-info">Cancelar</a>

            </div>
        <div>
        <br>
    </form>


@stop

@section('content')
   

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
