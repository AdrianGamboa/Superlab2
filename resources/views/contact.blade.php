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
    <div id="panel_control" class="container-fluid">

        <h1 style="margin-left:5%;">{{$seccion->titulo}}</h1>
        <p style="margin:0% 5% 0% 5%;"> {{$seccion->descripcion}} </p>

        <div style="margin: 2% 0px 0px 5%;">
            <form action="{{route('contact')}}" method="POST">
                
                @csrf

                <div class="row">
        
                    <h5>Nombre: </h5>                    
                    <input type="text" placeholder="Nombre" name="txt_nombre" id="txt_nombre" class="txt_box"/>

                    <h5>Correo: </h5>                    
                    <input type="text" placeholder="Correo" name="txt_correo" id="txt_correo" class="txt_box"/>

                    <h5>Comentario: </h5>
                    <textarea name="txt_comentario" placeholder="Detalle" class="form-control txt_box" id="txt_comentario" rows="3"></textarea>
                                        
                </div>
                
                <button type="submit" class="btn_guardar">Enviar</button>
            </form>
        </div>
    </div>
    @endsection

</html>