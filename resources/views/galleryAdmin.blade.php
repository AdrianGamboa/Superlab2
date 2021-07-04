<!DOCTYPE html>
<html lang="en">
    <head>
        @extends('layout.head')
    </head>

    <header>
        <div style="text-align: center;">
            <img src="../../resources/img/{{$seccion->banner}}" alt="" class="img-fluid" style='text-align: center; width:100%; height:50vh;'>
        </div>
    </header>

    @section('links')
        <a class="nav-link" href="{{ route('servicesAdmin') }}">Servicios</a>
        <a class="nav-link" href="{{ route('gallery') }}">Galería</a>
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
                    <a href="../../resources/gallery/{{$i->nombre}}" target="_blank">           
                    <img src="../../resources/gallery/{{$i->nombre}}" alt="" class="img-fluid" style='text-align: center; width: 600px; '>  
                    </a>          
                    <br><label style="font-weight: bold">Descripcion: </label>
                    <label>{{$i->descripcion}}</label><br>
                    <form action="../gallery/delete/<?php echo $i->idGalerias ?>" method="GET"style="margin-left: 5%;">
                        <button type="submit" class="btn_eliminar"></button>  
                    </form>
                </div>
            @endforeach
        </div>
        </div>
    @endsection

</html>