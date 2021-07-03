<!DOCTYPE html>
<html lang="en">
    <head>
        @extends('layout.head')
    </head>

    <header>
        <div style="text-align: center;">
            <img src="https://images-ext-2.discordapp.net/external/CBp88oM5rsyJz-9piHdLKXqB8Fc8ah4WVgTd8QZhPNI/https/bbdu.ac.in/wp-content/uploads/2020/05/banner-background-5.jpg?width=1440&height=525" alt="" class="img-fluid" style='text-align: center; width:100%; height:50vh;'>
        </div>
    </header>

    @section('contenido')
        <h1 style="margin-left:5%;">{{$seccion->titulo}}</h1>
        <p style="margin:0% 5% 0% 5%;"> {{$seccion->descripcion}} </p>
    @endsection

</html>