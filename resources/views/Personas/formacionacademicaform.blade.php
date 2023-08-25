@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Sedes</h1>
    
    <form action= "{{url('formacionacademica/insertarformacionacademica')}}" method= "POST" >
        @csrf
        <input type="hidden" value="{{$idpersona}}" name="idpersona">
        <br>
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-3">
                <label for="esactual" class="form-label">Es Actual</label>
                <input type="checkbox" name="esactual">
            </div>
            <div class="col-sm-3">
                <label for="estaactivo" class="form-label">Esta Activo</label>
                <input type="checkbox" name="estaactivo">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <label for="idciudad" class="form-label">Nivel Estudio</label>
                <select onchange="cambionivel(event)" name="idnivelestudio" class="form-control">
                    <option value="null">Seleccionar</option>
                    @foreach($nivelestudio as $items)
                        <option value="{{$items->id}}">{{$items->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4">
                <label for="idtitulo" class="form-label">Titulo</label>
                <select name="idtitulo" id="idtitulo" class="form-control">
                    <option value="null">Seleccionar</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label for="idestadoformacion" class="form-label">Estado Formación</label>
                <select name="idestadoformacion" class="form-control">
                    <option value="null">Seleccionar</option>
                    @foreach($estadoformacion as $items)
                        <option value="{{$items->id}}">{{$items->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <label for="idinstitucionformacion" class="form-label">Institución Formación</label>
                <select name="idinstitucionformacion" class="form-control">
                    <option value="null">Seleccionar</option>
                    @foreach($institucionformacion as $items)
                        <option value="{{$items->id}}">{{$items->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4">
                <label for="periodoinicio" class="form-label">Periodo Inicio</label>
                <input type="date" name="periodoinicio" class="form-control">
            </div>  
            <div class="col-sm-4">
                <label for="periodofinal" class="form-label">Periodo Final</label>
                <input type="date" name="periodofinal" class="form-control">
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
    <script src="{{asset('js/jquery.js')}}"></script>
    <script>
        function cambionivel(e){
            console.log(e);
            $.ajax({
                url:'/titulo/titulospornivel/'+e.target.value,
                type:'get',
            }).done(function(res){
                $('#idtitulo').empty();
                $('#idtitulo').append('<option value="null">Seleccionar</option>');
                if(res.length>0){
                    for(var i=0;i<res.length;i++){
                        $('#idtitulo').append(`<option value="${res[i].id}">${res[i].nombre}</option>`);
                    }
                }
            });
        }
    </script>
@stop
