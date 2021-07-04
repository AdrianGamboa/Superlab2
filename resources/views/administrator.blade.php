<!DOCTYPE html>
<html lang="en">
    <head>
        @extends('layout.head')
    </head>

    <header>
        <div style="text-align: center;">
            <img src="https://images-ext-2.discordapp.net/external/CBp88oM5rsyJz-9piHdLKXqB8Fc8ah4WVgTd8QZhPNI/https/bbdu.ac.in/wp-content/uploads/2020/05/banner-background-5.jpg?width=1440&height=525" alt="" class="img-fluid" style='text-align: center; width:100%; height:40vh;'>
        </div>
    </header>
    
    @section('links')
        <a class="nav-link active" aria-current="page" href="{{ route('administrator') }}">Inicio</a>
        <a class="nav-link" href="{{ route('servicesAdmin') }}">Servicios</a>
        <a class="nav-link" href="{{ route('galleryAdmin') }}">Galería</a>
    @endsection
    
    @section('contenido')
        <div id="panel_control" class="container-fluid">
            <h1>Panel de control</h1>

            <div class="row">
                <div class="col">
                    <form action="{{route('administrator')}}" method="POST" enctype="multipart/form-data" style="margin-left: 5%;">                
                        @csrf

                        <div class="row">
                            <select id="txt_seccion" name="txt_seccion" class="form-select form-select-sm" aria-label=".form-select-sm example" onchange = "establecerValores()">
                                <option value="0" selected>Elegir Sección</option>
                                <option value="1">Inicio</option>
                                <option value="2">¿Quiénes Somos?</option>
                                <option value="3">Servicios</option> 
                                <option value="4">Galería</option> 
                                <option value="5">Contacto</option>                
                            </select>
                        </div>

                        <div class="row">

                            <h5>Imagen del banner: </h5>                    
                            <input type="file" name="txt_file" id="txt_file" size="20" class="" accept="image/jpeg,image/gif,image/png"/>
                
                            <h5>Titulo de la sección: </h5>                    
                            <input type="text" placeholder="Titulo" name="txt_titulo" id="txt_titulo"/>

                            <h5>Detalle de la sección: </h5>
                            <textarea name="txt_descripcion" placeholder="Detalle" class="form-control" id="txt_descripcion" rows="3"></textarea>
                                                
                        </div>
                    
                        <button type="submit" class="btn_guardar">Guardar</button>
                    </form>
                </div>

                <div class="col" style="padding-right: 30px; visibility: hidden;  display: none;" id="servicios_form">
                    <form action="administrator/service" method="POST"style="margin-left: 5%;">                    
                        @csrf
                        <div class="row">
                
                            <h5>Nombre: </h5>                    
                            <input type="text" placeholder="Nombre" name="txt_nombre_serv" id="txt_nombre_serv"/>

                            <h5>Descripcion: </h5>
                            <textarea name="txt_descripcion_serv" placeholder="Detalle" class="form-control" id="txt_descripcion_serv" rows="3"></textarea>
                                                
                        </div>
                        
                        <button type="submit" class="btn_guardar">Guardar</button>
                    </form>
                </div>

                <div class="col" style="padding-right: 30px;  visibility: hidden;  display: none;" id="galeria_form">
                    <form action="administrator/gallery" method="POST"style="margin-left: 5%;" enctype="multipart/form-data">                    
                        @csrf
                        <div class="row">
                            <h5>Imagen para la galería: </h5>                    
                            <input type="file" name="txt_file_g" id="txt_file_g" size="20" class="" accept="image/jpeg,image/gif,image/png"/>   
                            <h5>Descripcion: </h5>
                            <textarea name="txt_descripcion_g" placeholder="Detalle" class="form-control" id="txt_descripcion_g" rows="3"></textarea>        
                        </div>
                        
                        <button type="submit" class="btn_guardar">Guardar</button>
                    </form>
                </div>
            </div>
           

          

            <script>
                function establecerValores() {
                    var select = document.getElementById("txt_seccion").value;
                    var sec = <?php echo json_encode($secciones); ?>; 
                    console.log(sec[0]);

                    if(select != '0'){
                        document.getElementById("txt_titulo").value=sec[parseInt(select)-1].titulo;
                        document.getElementById("txt_descripcion").value=sec[parseInt(select)-1].descripcion;
                    }else{
                        document.getElementById("txt_file").value='';
                        document.getElementById("txt_titulo").value='';
                        document.getElementById("txt_descripcion").value='';
                    }

                    if(select == '3'){
                        document.getElementById("servicios_form").style.visibility = 'visible';
                        document.getElementById("servicios_form").style.display = 'inline';
                        document.getElementById("galeria_form").style.visibility = 'hidden';
                        document.getElementById("galeria_form").style.display = 'none';                        
                    }
                    else if(select == '4'){
                        document.getElementById("galeria_form").style.visibility = 'visible';
                        document.getElementById("galeria_form").style.display = 'inline';
                        document.getElementById("servicios_form").style.visibility = 'hidden';
                        document.getElementById("servicios_form").style.display = 'none';
                    }
                    else
                    {
                        document.getElementById("galeria_form").style.visibility = 'hidden';
                        document.getElementById("galeria_form").style.display = 'none';   
                        document.getElementById("servicios_form").style.visibility = 'hidden';
                        document.getElementById("servicios_form").style.display = 'none';
                    }
                }

            </script>
            
            <div class="row">
                <h1>Comentarios:</h1>
      
                @foreach ($comentarios as $c)
                    <div class="comentario_box">                        
                        <label style="font-weight: bold">Autor: </label>
                        <label>{{$c->nombre}}</label><br>
                        <label style="font-weight: bold">Correo: </label>
                        <label>{{$c->correo}}</label><br>
                        <label style="font-weight: bold">Comentario:</label>
                        <label for="">{{$c->comentario}}</label>

                        <form action="contact/delete/<?php echo $c->idComentarios ?>" method="GET">
                            <button type="submit" class="btn_eliminar" style="background-position: left;"></button>  
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
        
    @endsection
    
</html>