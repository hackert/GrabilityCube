<!DOCTYPE html>
<html>
    <head>
          <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Grability Cube</title>
        
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!--   ********* Hojas de Estilos CSS ***********  -->
          {!! Html::style('assets/MDB-Free/css/bootstrap.min.css') !!}
          {!! Html::style('assets/MDB-Free/css/mdb.min.css') !!}
          {!! Html::style('assets/MDB-Free/css/style.css') !!}
          {!! Html::style('assets/dist/css/bootstrap-select.css') !!}
        
        <!--   ******************************************  -->
        

       
    </head>
    <body>     
        <div class="container">
            <div class="content"  style="width:80%;margin-top:15%;margin-left:10%;">
                
               
                   <div align="center">
                     <h3 class="h1-responsive" style="color:#131c4e;" ><b>Datos de Entrada del Cubo</b></h3>
                     <HR width=100% class=" panel-danger">
                   </div>  
                @include('errors/manager')
                <form role="form" id="form1" method="post"  autocomplete="off">
                   {!! csrf_field() !!}
                   <div class="md-form">
                        <i class="fa fa-cube prefix"></i>
                        <input type="text" name="size" id="size" maxlength="1" class="form-control required" onchange="valNumber('size');">
                        <label for="form2">Cubo Size:</label>
                   </div>
                    <div class="md-form">
                        <i class="fa fa-pencil prefix"></i>
                        <input type="text" name="NumbOp" id="NumbOp" maxlength="3" onchange="valNumber('NumbOp');addOp();" class="form-control">                     
                        <label for="form2">Num Operación:</label>
                   </div>

                        <div class="contenedor">
                            
                        </div>

                    
                    <div class="row"  align="center" style="margin-top:40px;">
                        <button type="submit" class="btn btn-info btn-lg " name="procesar">
                        <i class="fa fa-codepen left"></i>
                        Procesar
                        </button>
                        
                        <a href="{{ URL::previous() }}">
                        <button type="button" class="btn btn-warning btn-lg" name="cancelar">
                        <i class="fa fa-remove left"></i>
                        Cancelar
                        </button></a>
                    </div>

                </form>
            </div>
        </div>

        <!--   ----------- Archivos Javascript  ---------  -->
          
          {!! Html::script('assets/MDB-Free/js/jquery-2.2.3.min.js') !!}

          {!! Html::script('assets/MDB-Free/js/tether.min.js') !!}
          {!! Html::script('assets/MDB-Free/js/mdb.min.js') !!}
          {!! Html::script('assets/MDB-Free/js/bootstrap.min.js') !!}
          {!! Html::script('assets/js/funciones.js') !!}
          {!! Html::script('assets/js/jquery.maskedinput.js') !!}   
         
        <!--   ------------------------------------------  -->
        
    </body>
</html>
