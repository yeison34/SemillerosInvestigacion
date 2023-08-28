
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Bienvenidos</h1>
@stop

@section('content')
<img class="logo" src="semilleros/imagenes/logoU.png" alt="">
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

<style>

    body{
        background:  #efefef;
    }
    .contenedor{
        position: absolute;
        width: 100%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
    }

    .logo{
        width:30vw;
    }

</style>
