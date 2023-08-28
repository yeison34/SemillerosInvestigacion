@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Personas</h1>
    <form action= "{{url('semillerista/insertarsemillerista')}}" method= "POST" enctype="multipart/form-data">
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
                <label for="codigo" class="form-label">Codigo</label>
                <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el código">
            </div>
            <div class="col-sm-3">
                <label for="idpersona" class="form-label">Semillerista</label>
                <select name="idpersona" class="form-control">
                    <option value="null">Seleccionar</option>
                    @foreach($persona as $items)
                        <option value="{{$items->id}}">{{$items->nombre ." " . $items->apellido}}</option>
                    @endforeach
                </select>
            </div>
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
                <label for="semestre" class="form-label">Semestre</label>
                <input type="text" class="form-control" id="semestre" name="semestre" placeholder="Ingrese el código">
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
            <div class="col-sm-3">
                <label for="reportematricula" class="form-label">Reporte de Matricula</label>
                <input type="file" accept=".docx,.pdf" class="form-control" name="reportematricula" placeholder="foto">
            </div>
        </div>
        <br>
        
        
        <div class="row">
                <br>
                <button type="submit" class="btn btn-success">Registrar</button>
            </div>    
        <div>    
        <br>
        
    </form>


@stop

@section('content')
   

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
