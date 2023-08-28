@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Persona</h1>
    <div style="margin:8px">
        <a class="btn btn-info" href="{{url('/personas/formacionacademica',$persona->id)}}">Formación Academica</a>
        <a class="btn btn-info" href="/personas/telefono/{{$persona->id}}">Telefono</a>
        <a class="btn btn-info" href="/personas/correo/{{$persona->id}}">Correo</a>
    </div>
    <form action= "{{url('persona/guardaredicionpersona')}}" method= "POST" enctype="multipart/form-data">
        @csrf
        <br>
        <div class="row">
            <img style="width:200px;height:150px;" src="{{asset('imagenes/'.$persona->foto)}}">
        </div> 
        <input type="hidden" name="id" value="{{$persona->id}}">
        <div class="row">
            <div class="col-sm-3">
                <label for="idtipoidentificacion" class="form-label">Tipo Identificación</label>
                <select name="idtipoidentificacion" class="form-control">
                    @foreach($tipoidentificacion as $tipo)
                        <option value="{{$tipo->id}}" {{$tipo->id==$persona->idtipoidentificacion?'checked':''}}>{{$tipo->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <label for="identificacion" class="form-label">Identificación</label>
                <input type="text" value="{{$persona->identificacion}}" class="form-control" id="identificacion" name="identificacion" placeholder="Ingrese el código">
            </div>
            <div class="col-sm-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" value="{{$persona->nombre}}" class="form-control" value="{{$persona->nombre}}" id="nombre" name="nombre" placeholder="Ingrese el código">
            </div>
            <div class="col-sm-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" value="{{$persona->apellido}}" class="form-control" id="apellido" name="apellido" placeholder="Ingrese el código">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <label for="fechanacimiento" class="form-label">Fecha Nacimiento</label>
                <input type="date" value="{{ date('Y-m-d', strtotime($persona->fechanacimiento)) !== '1970-01-01' ? date('Y-m-d', strtotime($persona->fechanacimiento)) : '' }}" class="form-control" id="apellido" name="fechanacimiento" placeholder="Ingrese el código">
            </div>
            <div class="col-sm-3">
                <label for="idciudad" class="form-label">Ciudad</label>
                <select name="idciudad" class="form-control">
                    @foreach($ciudad as $items)
                        <option value="{{$items->id}}" {{$items->id==$persona->idciudad?'selected':''}}>{{$items->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <label for="genero" class="form-label">Genero</label>
                @php
                    $genero=$persona->genero;
                @endphp
                <select name="genero" class="form-control">
                    <option value="M" {{$persona->genero==$genero?'selected':''}}>Masculino</option>
                    <option value="F" {{$persona->genero==$genero?'selected':''}}>Femenino</option>
                </select>
            </div>
            
            <div class="col-sm-3">
                <label for="direccion"  class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" value="{{$persona->direccion}}">
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
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>    
        <div> 
        <br>
        
    </form>


@stop

@section('content')
   

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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
@stop
