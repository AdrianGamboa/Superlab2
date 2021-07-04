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
    
        <p style="margin:0% 5% 0% 5%;"> {{$seccion->descripcion}} </p>
        <br>
        @foreach ($servicios as $s)
            <div class="comentario_box">                        
                <label style="font-weight: bold">Nombre: </label>
                <label>{{$s->nombre}}</label><br>
                <label style="font-weight: bold">Descripcion: </label>
                <label>{{$s->descripcion}}</label><br>

                <a href="editServices/<?php echo $s->idServicios ?>">
                <button type="submit" class="btn_editar">Editar</button>    
                </a>
                
                <form action="../services/delete/<?php echo $s->idServicios ?>" method="GET">
                    <button type="submit" class="btn_eliminar"></button>    
                </form>
            </div>
        @endforeach
    </div>
    @endsection

</html>