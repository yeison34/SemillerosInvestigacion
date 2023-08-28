@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Monitor</h1>

    <form action= "{{url('monitor/guardaredicionmonitor')}}" method= "POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$monitor->id}}">
        <br>
        <div class="row">
            <div class="col-sm-3"><a href="{{asset('monitors/reportesmatricula/'.$monitor->reportematricula)}}"class="btn btn-success {{$monitor->reportematricula!=null?'visible':'oculto'}}">Ver Reporte</a></div>
            <div class="col-sm-6"></div>
            <div class="col-sm-3">
                <label for="estaactivo" class="form-label">Esta Activo</label>
                <input type="checkbox" id="estaactivo" name="estaactivo" {{$monitor->estaactivo?'checked':''}} placeholder="Ingrese el código">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <label for="codigo" class="form-label">Codigo</label>
                <input type="text" value="{{$monitor->codigo}}" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el código">
            </div>
            <div class="col-sm-3">
                <label for="idpersona" class="form-label">monitor</label>
                <select name="idpersona" class="form-control">
                    @foreach($persona as $items)
                        <option value="{{$items->id}}" {{$items->id==$monitor->idpersona?'selected':''}}>{{$items->nombre ." " . $items->apellido}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <label for="idsede" class="form-label">Sede</label>
                <select name="idsede" class="form-control">
                    @foreach($sede as $items)
                        <option value="{{$items->id}}" {{$items->id==$monitor->idsede?'selected':''}}>{{$items->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <label for="semestre" class="form-label">Semestre</label>
                <input type="text" value="{{$monitor->semestre}}" class="form-control" id="semestre" name="semestre" placeholder="Ingrese el código">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <label for="idprograma" class="form-label">Programa</label>
                <select name="idprograma" class="form-control">
                    @foreach($programa as $items)
                        <option value="{{$items->id}}" {{$items->id==$monitor->idprograma?'selected':''}}>{{$items->nombre}}</option>
                    @endforeach
                </select>
            </div>  
            <div class="col-sm-3">
                <label for="idsemillero" class="form-label">Semillero</label>
                <select name="idsemillero" class="form-control">
                    @foreach($semillero as $items)
                        <option value="{{$items->id}}" {{$items->id==$monitor->idsemillero}}>{{$items->nombre}}</option>
                    @endforeach
                </select>
            </div>    
            
            <div class="col-sm-3">
                <label for="fechavinculacion" class="form-label">Fecha Vinculación</label>
                <input type="date" value="{{ date('Y-m-d', strtotime($monitor->fechavinculacion)) !== '1970-01-01' ? date('Y-m-d', strtotime($monitor->fechavinculacion)) : '' }}" class="form-control" id="fechavinculacion" name="fechavinculacion" placeholder="Ingrese el código">
            </div>
            <div class="col-sm-3">
                <label for="reportematricula" class="form-label">Reporte de Matricula</label>
                <input type="file" accept=".docx,.pdf" class="form-control" name="reportematricula" placeholder="foto">
            </div>
        </div>
        <br>
        <div>
            <div class="col-sm-3">
                <label for="acuerdodenombramiento" class="form-label">Acuerdo de Nombramiento</label>
                <input type="file" accept=".docx,.pdf" class="form-control" name="acuerdodenombramiento" placeholder="foto">
            </div>
        </div>    
        <br>
        <div class="row">
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