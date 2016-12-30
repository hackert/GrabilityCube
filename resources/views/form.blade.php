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
        

               <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 46px;
                font-weight: bold;
                color: #05ce7c;
            }

            .title2 {
                font-size: 46px;
                font-weight: bold;
                color: #131c4e;
            }
        </style>
    </head>
    <body>     
    <div class="title" align="center" style="margin-top:10px;">
            <b class="title">G</b><b class="title2">rability Cube </b>
    </div>
        <div style="margin-top:10%;" align="center">           
             <form method="GET" action="cube" name="form">
                    <div class="panel panel-success" align="center">
                        <div class="panel-heading" style="margin-bottom:20px;">
                             <h3 class="panel-title">Resultado Caso de Prueba</h3>
                        </div>
                        <div class="panel-body"> <?php  echo $value; ?> </div>
                    </div>
                     <button type="submit" class="btn btn-success btn-lg " name="cargar" style="margin-top:20px;">
                    <i class="fa fa-play-circle left"></i>
                    Cargar Nuevo Caso de Prueba
                    </button>

              </form>  
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
