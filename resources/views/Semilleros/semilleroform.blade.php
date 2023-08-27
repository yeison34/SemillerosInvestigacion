@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h4>Registro de Semilleros</h4>
    <form action= "{{url('semillero/insertarsemillero')}}" method= "POST" enctype="multipart/form-data">
        @csrf
        <br>
        <div class="row">
            <div class="col-sm-9"></div>
            <div class="col-sm-3">
                <label for="estaactivo" class="form-label">Esta Activo</label>
                <input type="checkbox" value="1" name="estaactivo">
            </div>
        </div>
        <br>
        <div class="row">
        <div class="col-sm-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el código">
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
            <label for="correo" class="form-label">Correo</label>
            <input type="email" class="form-control" id="nombre" name="correo" placeholder="Ingrese el código">
        </div>
        <div class="col-sm-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="nombre" name="descripcion" placeholder="Ingrese el código">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3">
            <label for="mision" class="form-label">Misión</label>
            <textarea name="mision" style="height:150px" class="form-control"></textarea>
        </div>
        <div class="col-sm-3">
            <label for="vision" class="form-label">Visión</label>
            <textarea name="vision" style="height:150px" class="form-control"></textarea>
        </div>
        <div class="col-sm-3">
            <label for="valores" class="form-label">Valores</label>
            <textarea name="valores" style="height:150px" class="form-control"></textarea>
        </div>
        <div class="col-sm-3">
            <label for="objetivos" class="form-label">Objetivos</label>
            <textarea name="objetivos" style="height:150px" class="form-control"></textarea>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3">
            <label for="presentacion" class="form-label">Presentación</label>
            <textarea name="presentacion" style="height:150px" class="form-control"></textarea>
        </div>
        <div class="col-sm-3">
                <label for="lineadeinvestigacion" class="form-label">Linea de Investigación</label>
                <input type="text" class="form-control" id="lineainvestigacion" name="lineainvestigacion" placeholder="Ingrese el código">
        </div>
        <div class="col-sm-3">
                <label for="numeroresolucion" class="form-label">Numero de Resolución</label>
                <input type="text" class="form-control" id="numeroresolucion" name="numeroresolucion" placeholder="Ingrese el código">
        </div>
        <div class="col-sm-3">
                <label for="fecharesolucion" class="form-label">Fecha Resolución</label>
                <input type="date" class="form-control" id="fecharesolucion" name="fecharesolucion" placeholder="Ingrese el código">
        </div>
        
    </div>
    <br>
    <div class="row">
    <div class="col-sm-3">
                <label for="resolucion" class="form-label">Resolución</label>
                <input type="file" class="form-control" id="solucion" accept=".docx,.pdf" name="archivoresolucion" placeholder="Ingrese el código">
        </div>
        <div class="col-sm-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" class="form-control" id="logo" accept=".jpg,.jpej,.png,.gif" name="logo" placeholder="Ingrese el código">
        </div>
    </div>
<br>
        <button type="submit" class="btn btn-success">Registrar</button>
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
