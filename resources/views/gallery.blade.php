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
        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
        <a class="nav-link" href="{{ route('about') }}">¿Quiénes Somos?</a>
        <a class="nav-link" href="{{ route('services') }}">Servicios</a>
        <a class="nav-link" href="{{ route('gallery') }}">Galería</a>
        <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
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
                </div>
            @endforeach
        </div>
        </div>
    @endsection

</html>