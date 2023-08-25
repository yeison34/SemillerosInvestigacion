@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Ciudades</h1>
    <form action= "{{url('ciudad/insertarciudad')}}" method= "POST" >
        @csrf
        <div class="row">
        <div class="col-sm-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el código">
        </div>
        <div class="col-sm-4">
            <label for="iddepartamento" class="form-label">Departamento</label>
            <select name="iddepartamento" class="form-control">
                <option value="null">Seleccionar</option>
                @foreach($departamento as $items)
                    <option value="{{$items->id}}">{{$items->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <label for="estaactivo" class="form-label">Esta Activo</label> <br>
            <input type="checkbox" class="form-control" name="estaactivo" @if($items->estaactivo) checked @endif>
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
