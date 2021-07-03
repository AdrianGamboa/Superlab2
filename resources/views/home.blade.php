<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.head')
</head>

<header>


    <div style="text-align: center;">
        <img src="https://picsum.photos/200/300" alt="" class="img-fluid" style='text-align: center; width:100%; height:50vh;'>
    </div>
    
</header>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
            <a class="nav-link" href="{{ route('about') }}">¿Quiénes Somos?</a>
            <a class="nav-link" href="{{ route('services') }}">Servicios</a>
            <a class="nav-link" href="{{ route('galery') }}">Galería</a>
            <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
        </div>
        </div>
    </div>
    </nav>
    </div>
    <br>
    <h1 style="margin-left:5%;">Titulo de seccion</h1>
   <p  style="margin:0% 5% 0% 5%;">
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste optio eveniet nihil reprehenderit ad laborum. Amet, animi error soluta, esse minima similique nobis placeat at, hic iusto quis! Velit, aliquid!
    Praesentium iste labore repellendus quidem eligendi molestiae impedit temporibus, accusantium tempora incidunt ullam exercitationem soluta in tempore nobis corporis dolore! Doloribus fuga maxime autem aliquam possimus est iure quaerat sunt.
    Dignissimos voluptates facilis libero nobis voluptatum? Voluptas animi architecto tempore delectus dignissimos rem ab, suscipit quaerat, adipisci quidem consectetur porro sequi quis modi dolorem soluta, illo nulla! Magnam, cum alias?
    Optio ullam eos aperiam, ratione deserunt magnam aut, cupiditate velit eum distinctio quidem iste, facere obcaecati non neque ea! Illum quia vero neque obcaecati maiores, dicta tempore eaque distinctio quam.
    Voluptates autem, pariatur voluptatibus necessitatibus obcaecati, voluptatum, magnam nam placeat unde assumenda possimus. At, eaque sed expedita harum praesentium excepturi delectus laborum? Nulla neque repellat quia odit sapiente molestias? Aspernatur.
   </p>
</body>
</html>