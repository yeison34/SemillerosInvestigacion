@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Estudiantes</h1>
    <form action= "{{url('estudiantes/registrar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="codigoFacultad" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoEstudiante" name="codigoEstudiante" placeholder="Ingrese el código" required/>
        </div>

        <div class="mb-3">
            <label for="nombreFacultad" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreEstudiante" name="nombreEstudiante" placeholder="Ingrese el nombre"required/>
        </div>

        <div class="mb-3">
            <label for="nombreFacultad" class="form-label">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" placeholder="Ingrese la edad"required/>      
        </div>

        <div class="mb-3">
                <label for="nombreFacultad" class="form-label">Fecha Nacimiento</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required/>
         </div>

        <div class="mb-3">
            <label for="nombreFacultad" class="form-label">Sexo</label>
            <select name="sexo" class="form-control" >
                    <option>Seleccionar</option>
                    <option value="M">MASCULINO</option>
                    <option value="F">FEMENINO</option>
                </select>
       </div>

        <div class="mb-3">
                <label for="nombreFacultad" class="form-label">Ciudad</label>
                <select name="ciudad" class="form-control" >
                    <option>Seleccionar</option>
                    @foreach($ciudades as $c)
                        <option value="{{$c->codciudad}}">{{$c->nomciudad}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="nombreFacultad" class="form-label">Barrio</label>
                <select name="barrio" class="form-control" >
                    <option>Seleccionar</option>
                    @foreach($barrios as $b)
                        <option value="{{$b->codbarrio}}">{{$b->nombarrio}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="nombreFacultad" class="form-label">Programa</label>
                <select name="programa" class="form-control" >
                    <option>Seleccionar</option>
                    @foreach($programas as $p)
                        <option value="{{$p->codPrograma}}">{{$p->nomPrograma}}</option>
                    @endforeach
                </select>
            </div>

        <button type="submit" class="btn btn-success">Registrar</button>
    </form>


@stop

@section('content')
   

@stop