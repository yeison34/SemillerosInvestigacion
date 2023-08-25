@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de programas</h1>
    <form action= "{{url('programas/registrar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Código</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el código">
        </div>
        <div class="mb-3">
            <label for="idfacultad" class="form-label">Facultad</label>
            <select name="idfacultad" class="form-control">
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
    <link rel="stylesheet" href="asset(css/style.css)">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <link rel="stylesheet" href="asset(js/scripts.js)">
    <link rel="stylesheet" href="asset(js/datatables-simple-demo.js)">
@stop
