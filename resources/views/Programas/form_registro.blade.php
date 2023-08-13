@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de programas</h1>
    <form action= "{{url('programas/registrar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="codigoPrograma" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoPrograma" name="codPrograma" placeholder="Ingrese el código">
        </div>

        <div class="mb-3">
            <label for="nombrePrograma" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombrePrograma" name="nomPrograma" placeholder="Ingrese el nombre">
        </div>

        <div class="mb-3">
            <label for="facultad" class="form-label">Facultad</label>
            <select name="codFacultad" class="form-control">
                <option>Seleccionar</option>
                @foreach($facultades as $f)
                    <option value="{{$f->codFacultad}}">{{$f->nomFacultad}}</option>
                @endforeach
            </select>
           
        </div>

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
