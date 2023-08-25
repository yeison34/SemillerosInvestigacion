@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Formación Academica</h1>
    <form action= "{{url('formacionacademica/guardaredicionformacionacademica')}}" method= "POST" >
        @csrf
        <input type="hidden" value="{{$formacionacademica->idpersona}}" name="idpersona">
        <input type="hidden" value="{{$formacionacademica->id}}" name="id">
        <input type="hidden" value="{{$formacionacademica->idtitulo}}" id="titulohidden">
        <br>
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-3">
                <label for="esactual" class="form-label">Es Actual</label>
                <input type="checkbox" name="esactual" {{$formacionacademica->esactual?'checked':''}}>
            </div>
            <div class="col-sm-3">
                <label for="estaactivo" class="form-label">Esta Activo</label>
                <input type="checkbox" name="estaactivo" {{$formacionacademica->estaactivo?'checked':''}}>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <label for="idciudad" class="form-label">Nivel Estudio</label>
                <select onchange="cambionivel(event)" name="idnivelestudio" class="form-control" id="idnivelestudio">
                    <option value="null">Seleccionar</option>
                    @foreach($nivelestudio as $items)
                        <option value="{{$items->id}}" {{($items->id==$formacionacademica->idnivelestudio)?'selected':''}}>{{$items->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4">
                <label for="idtitulo" class="form-label">Titulo</label>
                <select name="idtitulo" id="idtitulo" class="form-control">
                </select>
            </div>
            <div class="col-sm-4">
                <label for="idestadoformacion" class="form-label">Estado Formación</label>
                <select name="idestadoformacion" class="form-control">
                    @foreach($estadoformacion as $items)
                        <option value="{{$items->id}}" {{($items->id==$formacionacademica->idestadoformacion)?'selected':''}}>{{$items->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <label for="idinstitucionformacion" class="form-label">Institución Formación</label>
                <select name="idinstitucionformacion" class="form-control">
                    @foreach($institucionformacion as $items)
                        <option value="{{$items->id}}" {{($items->id==$formacionacademica->idinstitucionformacion)?'selected':''}}>{{$items->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4">
                <label for="periodoinicio" class="form-label">Periodo Inicio</label>
                <input type="date" name="periodoinicio" class="form-control" value="{{ date('Y-m-d', strtotime($formacionacademica->periodoinicio)) !== '1970-01-01' ? date('Y-m-d', strtotime($formacionacademica->periodoinicio)) : ''}}">
            </div>  
            <div class="col-sm-4">
                <label for="periodofinal" class="form-label">Periodo Final</label>
                <input type="date" name="periodofinal" class="form-control" value="{{ date('Y-m-d', strtotime($formacionacademica->periodofinal)) !== '1970-01-01' ? date('Y-m-d', strtotime($formacionacademica->periodofinal)) : '' }}">
            </div>  
        </div>
<br>
        <button type="submit" class="btn btn-success">Guardar</button>
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
        $(document).ready(function(){
            console.log($('#titulohidden').val());

            $.ajax({
                url:'/titulo/titulospornivel/'+$('#idnivelestudio').val(),
                type:'get',
            }).done(function(res){
                var idtitulo=$('#titulohidden').val();
                $('#idtitulo').empty();
                $('#idtitulo').append('<option value="null">Seleccionar</option>');
                if(res.length>0){
                    for(var i=0;i<res.length;i++){
                        var seleccionado='"';
                        if(res[i].id==idtitulo){
                            seleccionado='selected';
                        }
                        var option=$('<option></option>');
                        option.attr('value',res[i].id);
                        option.attr('selected',seleccionado);
                        option.text(res[i].nombre);
                        $('#idtitulo').append(option);
                        //$('#idtitulo').append(`<option value="${res[i].id} ${(res[i].id==idtitulo)?'selected':''}">${res[i].nombre}</option>`);
                    }
                }
            });
        });
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
