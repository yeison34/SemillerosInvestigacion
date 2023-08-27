@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Personas</h1>
    <form action= "{{url('persona/insertarpersona')}}" method= "POST" enctype="multipart/form-data">
        @csrf
        <br>
        <div class="row">
            <img style="width:200px;height:150px;" src="{{asset('imagenes/xdefaultx.png')}}">
        </div>    
        <br>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <label for="idtipoidentificacion" class="form-label">Tipo Identificación</label>
                <select name="idtipoidentificacion" class="form-control">
                    <option value="null">Seleccionar</option>
                    @foreach($tipoidentificacion as $tipo)
                        <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <label for="identificacion" class="form-label">Identificación</label>
                <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Ingrese el código">
            </div>
            <div class="col-sm-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el código">
            </div>
            <div class="col-sm-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese el código">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <label for="fechanacimiento" class="form-label">Fecha Nacimiento</label>
                <input type="date" class="form-control" id="apellido" name="fechanacimiento" placeholder="Ingrese el código">
            </div>
            <div class="col-sm-3">
                <label for="idciudad" class="form-label">Ciudad</label>
                <select name="idciudad" class="form-control">
                    <option value="null">Seleccionar</option>
                    @foreach($ciudad as $ciudad)
                        <option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <label for="genero" class="form-label">Genero</label>
                <select name="genero" class="form-control">
                    <option value="null">Seleccionar</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text"  class="form-control" name="direccion" placeholder="Direccion">
            </div>
        </div>
        <br>
        
        <div class="row">
            <div class="col-sm-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" accept=".jpg,.jpeg,.phg,.gif" class="form-control" name="foto" placeholder="foto">
            </div>
            <div class="col-sm-6">
            </div> 
            <div class="col-sm-3">
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
