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
    
    @section('links')
        <a class="nav-link" href="{{ route('servicesAdmin') }}">Servicios</a>
        <a class="nav-link" href="{{ route('galleryAdmin') }}">Galería</a>
    @endsection
    
    @section('contenido')
        <div id="panel_control" class="container-fluid">
            <h1>Editar servicios</h1>
            <div class="row">   
                <div class="col" id="servicios_form">
                    <form action="../editServices/update/<?php echo $servicio->idServicios ?>" method="GET"style="margin-left: 5%;">                    
                        @csrf
                        <div class="row">
                            <h5>Nombre: </h5>                    
                            <input style="width:50%" type="text" placeholder="Nombre" name="txt_nombre_serv" id="txt_nombre_serv" value="<?php echo $servicio->nombre ?>"/>
                            <h5>Descripcion: </h5>
                            <textarea style="width:50%" name="txt_descripcion_serv" placeholder="Detalle" class="form-control" id="txt_descripcion_serv" rows="3" ><?php echo $servicio->descripcion?></textarea>                      
                        </div>
                        <button type="submit" class="btn_guardar">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
    
</html>