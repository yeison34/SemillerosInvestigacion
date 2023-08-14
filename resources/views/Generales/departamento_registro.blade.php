@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Departamento</h1>
@stop

@section('content')
    <h1>Registro de Departamentos</h1>
    <form action="{{url('generales/reg_depa')}}" method="post">
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Pais</th>
                    <th class="text-center" scope="col">Esta Activo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 
                        <div class="col-mb-2">
                            <input type="text" class="form-control" name="nombre">
                        </div>
                    </td>
                    <td>
                        <div>
                            <select name="idpais" class="form-control">
                                <option value="null">Seleccionar</option>
                                @foreach($paises as $pais)
                                    <option value="{{$pais->id}}">{{$pais->nombre}}</option>
                                @endforeach
                            </select>
                        </div>    
                    </td>
                    <td> 
                        <div class="col-mb-2">
                            <input type="checkbox" class="form-control" name="estaactivo" @if($pais->estaactivo) checked @endif>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="mx-3">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
        
        @csrf
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop