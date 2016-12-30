<!DOCTYPE html>
<html>
    <head>
        <title>Grability Cube</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!--   ********* Hojas de Estilos CSS ***********  -->
          {!! Html::style('assets/MDB-Free/css/bootstrap.min.css') !!}
          {!! Html::style('assets/MDB-Free/css/mdb.min.css') !!}
          {!! Html::style('assets/MDB-Free/css/style.css') !!}
        
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
                font-size: 96px;
                font-weight: bold;
                color: #05ce7c;
            }

            .title2 {
                font-size: 96px;
                font-weight: bold;
                color: #131c4e;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form method="GET" action="cube" name="form">
                    <div class="title" style="margin-top:20px;"><b class="title">G</b><b class="title2">rability Cube </b></div>

                    <button type="submit" class="btn btn-success btn-lg " name="Inicio">
                    <i class="fa fa-hourglass-start left"></i>
                    Inicio
                    </button>

                </form>               
            </div>
        </div>
        <!--   ----------- Archivos Javascript  ---------  -->

          {!! Html::script('assets/MDB-Free/js/jquery-2.2.3.min.js') !!}
          {!! Html::script('assets/MDB-Free/js/tether.min.js') !!}
          {!! Html::script('assets/MDB-Free/js/bootstrap.min.js') !!}
          {!! Html::script('assets/MDB-Free/js/mdb.min.js') !!}

        <!--   ------------------------------------------  -->

    </body>
</html>
