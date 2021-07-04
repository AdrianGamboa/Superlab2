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
        <div id="panel_control" class="container-fluid">
            <h1>Panel de control</h1>

            <form action="{{route('administrator')}}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div class="row">
                    <select id="txt_seccion" name="txt_seccion" class="form-select form-select-sm" aria-label=".form-select-sm example" onchange= "establecerValores()">
                        <option value="0" selected>Elegir Sección</option>
                        <option value="1">Inicio</option>
                        <option value="2">¿Quiénes Somos?</option>
                        <option value="3">Servicios</option> 
                        <option value="4">Galería</option> 
                        <option value="5">Contacto</option>                
                    </select>
                </div>
                <script>
                    function establecerValores(){
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
                    }
                   
                </script>
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

            <div class="row">
                <h1>Comentarios:</h1>

                @foreach ($comentarios as $c)
                    <div>
                        
                        <label>Autor: </label>
                        <label>{{$c->nombre}}</label><br>
                        <label>Correo: </label>
                        <label>{{$c->correo}}</label><br>
                        <label>Comentario:</label>
                        <label for="">{{$c->comentario}}</label>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
    
</html>