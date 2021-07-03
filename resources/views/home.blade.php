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


    @section('contenido')
        <h1 style="margin-left:5%;">{{$seccion->titulo}}</h1>
        <p style="margin:0% 5% 0% 5%;"> {{$seccion->descripcion}} </p>
    @endsection
</html>