<!DOCTYPE html>
<html lang="en">
    <head>
        @extends('layout.head')
    </head>

    <header>
        <div style="text-align: center;">
            <img src="../resources/img/{{$seccion->banner}}" alt="" class="img-fluid" style='text-align: center; width:100%; height:50vh;'>
        </div>
    </header>
    @section('links')
        <a class="nav-link" href="{{ route('services') }}">Servicios</a>
        <a class="nav-link" href="{{ route('gallery') }}">Galería</a>
    @endsection

    @section('contenido')
    <div id="page">
        <h1>{{$seccion->titulo}}</h1>
    </div>
        <p style="margin:0% 20% 0% 20%;"> {{$seccion->descripcion}} </p>
   
    @endsection

</html>