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
                            <li><a href="#about">Quienes somos</a>
                            </li>
                            <li><a href="#features">VIP</a>
                            </li>
                            <li><a href="#reviews">Charter</a>
                            </li>
                            <li><a href="#screens">Nuestra ciudad</a>
                            </li>
                            <li><a href="#demo">demo</a>
                            </li>
                            <li><a class="getApp" href="#getApp">Mi reserva</a>
                            </li>
                            <li><a href="#support">Contactenos</a>
                            </li>
                        </ul>
                    </div>
               
                </div>
              
        </nav>

        
       
        
            <div class="tp-banner" > </div>
    


    </header>

    <div class="container contenido_info">
        
            <h1 class="title"> PASAJEROS</h1>

         <form role="form" action="{{ route('resumen_r')}}" method="post">
            <input type="hidden" class="form-control" name="cant_tikets" value="{{$cant_pasajeros}}">
            <input type="hidden" class="form-control" name="viaje_id" value="{{$viaje->id}}">
            {{ csrf_field() }}
             @for ($i = 0; $i < $cant_pasajeros; $i++)
            <div class="detaller_tour tabs_reserva">
             <h2> Pasajero  {{$i+1}} </h2>
                <div class="row">
                    <div class="col-lg-4">  
                            <div class="form-group">
                                <label for="inputPassword"> Nombre Completo  </label>
                                <input type="text" class="form-control" placeholder="Nombre Completo " name="{{$i}}_nombre">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="inputPassword">Apellido Completo</label>
                                <input type="text" class="form-control" placeholder="Apellido Completo" name="{{$i}}_apellido">
                            </div>
                        </div>
                         <div class="col-lg-4">
                            <div class="form-group">
                                <label for="inputPassword">Edad</label>
                                <input type="number"  class="form-control" min="0"  name="{{$i}}_edad">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="inputPassword">Identificación</label>
                                <input type="text" class="form-control" placeholder="Dirección de Correo" name="{{$i}}_identificacion">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="inputPassword">Email</label>
                                <input type="email" class="form-control" placeholder="Dirección de Correo" name="{{$i}}_email">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="inputPassword">Teléfono</label>
                                <input type="text" class="form-control" placeholder="Teléfono" name="{{$i}}_telefono">
                            </div>
                        </div>
                </div>
    
            </div>
            @endfor     


  
 
            <div class="col-lg-12 btn_reserva">
                <button> Reservar</button>
            </div>
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
