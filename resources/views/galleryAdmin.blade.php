<!DOCTYPE html>
<html lang="en">
    <head>
        @extends('layout.head')
    </head>

    <header>
        <div style="text-align: center;">
            <img src="/img/{{$seccion->banner}}" alt="" class="img-fluid" style='text-align: center; width:100%; height:40vh;'>
        </div>
    </header>

    @section('links')
        <a class="nav-link active" aria-current="page" href="{{ route('administrator') }}">Inicio</a>
        <a class="nav-link" href="{{ route('servicesAdmin') }}">Servicios</a>
        <a class="nav-link" href="{{ route('galleryAdmin') }}">Galería</a>
    @endsection

    @section('contenido')
        <div id="page">
                <h1>{{$seccion->titulo}}</h1>
        </div>
        <p style="margin:0% 20% 0% 20%;"> {{$seccion->descripcion}} </p>
        <br>
        <div class="container-fluid">
        <div class="row galeria">
            @foreach ($imagenes as $i)
                <div class=" col" style="text-align: center;"> 
                    <a href="/pictures/{{$i->nombre}}" target="_blank">           
                    <img src="/pictures/{{$i->nombre}}" alt="" class="img-fluid" style='text-align: center; width: 600px; '>  
                    </a>          
                    <br><label style="font-weight: bold">Descripcion: </label>
                    <label>{{$i->descripcion}}</label><br>
                    <form action="/gallery/delete/<?php echo $i->idGalerias ?>" method="GET"style="margin-left: 5%;">
                        <button type="submit" class="btn_eliminar"></button>  
                    </form>
                </div>
            @endforeach
        </div>
        </div>
    @endsection

</html>