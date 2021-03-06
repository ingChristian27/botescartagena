<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>Oleose App Landing Page | Bootstrap Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="/assets/comercial/css/bootstrap.css">
    
    <link rel="stylesheet" href="/assets/comercial/css/animate.css">
    <link rel="stylesheet" href="/assets/comercial/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/comercial/css/slick.css">
    <link rel="stylesheet" href="/assets/comercial/js/rs-plugin/css/settings.css">


    <link rel="stylesheet" href="/assets/comercial/css/freeze.css">

    <link rel="stylesheet" href="/assets/comercial/css/bootstrap-datepicker.css" href="">
    <link rel="stylesheet" href="/assets/comercial/css/interna.css">


    <script type="text/javascript" src="/assets/comercial/js/modernizr.custom.32033.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>


    <header>
       
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
      
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="fa fa-bars fa-lg"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">
                            <img src="/assets/comercial/img/freeze/logo.png" alt="" class="logo">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                        
                            <li><a href="{{ route('index')}}">Inicio</a>
                            </li>
                           
                            <li><a href="{{ route('index')}}">Contactenos</a>
                            </li>
                        </ul>
                    </div>
               
                </div>
              
        </nav>

        
       
        
            <div class="tp-banner" > </div>
    



    </header>

    <div class="container contenido_info">
        
            <h1 class="title"> Busqueda</h1>
            <h3>No hay viajes disponibles para la fecha deseada, por favor seleccione otro día</h3>
        
            <div class="detaller_tour tabs_reserva">

                <table class="table table-hover">
                    <tr>
                        <td class="info"><strong>Id Viaje </strong></td>
                        
                       
                        <td class="info"><strong>Fecha</strong></td>
                        <td class="info"><strong>Disponibilidad</strong></td>
                        <td class="info"><strong>Seleccionar</strong></td>
                    </tr>
                    @foreach($viajes as  $viaje) 
                    <tr>
                        <td>{{$viaje->id  }}</td>
                        <td>{{$viaje->fecha_reserva}}</td>
                        <td>{{$viaje->capacidad}}</td>
                        <td>
<form role="form" action="{{ route('formulario_compra')}}" method="post">
                        {{ csrf_field() }}
                         <input type="hidden" name="fecha" value="{{$viaje->fecha_reserva}}">
                         <input type="hidden" name="cant_adultos" value="{{$cant_pasajeros}}">
                         <button type="submit" class="btn btn-default"value="enviar">Reservar</button>

</form>
                        </td>

                     

         
        </label>
      </div></td>
                    </tr>
                    @endforeach
                </table>


  
 
          
        </form>
     </div>    
   
    <script src="/assets/comercial/js/jquery-1.11.1.min.js"></script>
    <script src="/assets/comercial/js/bootstrap.min.js"></script>
    <script src="/assets/comercial/js/slick.min.js"></script>  
    <script src="/assets/comercial/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script> 
    <script src="/assets/comercial/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
    <script src="/assets/comercial/js/waypoints.min.js"></script> 
    <script src="/assets/comercial/js/scripts.js"></script> 
    <script src="/assets/comercial/js/placeholdem.min.js"></script> 
    <script src="/assets/comercial/js/bootstrap-datepicker.js"></script>

    <script>
        $(document).ready(function() {
            appMaster.preLoader();
        });
    </script>
    <script type="text/javascript">
     $('.datepicker').datepicker({
         weekStart:1,
         color: 'red'
     });
    </script>

</body>

</html>
