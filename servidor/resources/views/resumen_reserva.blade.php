<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>Botes Cartagena</title>
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
        
            <h1 class="title"> MI RESERVA</h1>

         
    
            <div class="detaller_tour tabs_reserva">

                    <div class="row">
                        <div class="col-lg-6">
                            <h2> Detalles del tour</h2>
                           
                                
                                    <strong>Fecha del tour:    </strong>  {{$reserva->tikets[0]->viaje->fecha_reserva}}<br>
                                    <strong>Nave:    </strong>{{$reserva->tikets[0]->viaje->nave->codigo}}<br>
                                    <strong>Hora de salida:    </strong> 08: 00 AM<br>
                                   
                                
                         
                        </div>
                        <div class="col-lg-6 text-right cod_reserva "> 
                            <h4> NÚMERO DE RESERVA </h4>
                           <h3><strong> {{$reserva->id}}</strong></h3>
                        </div>
                    </div>
            </div>
            <div class="detaller_tour tabs_reserva">
            <div class="row" style="padding:20px;">
            @foreach($reserva->tikets as  $tiket)
                    
                        <div class="col-lg-6 col-md-6">
                             <h5><strong>Tiket {{$tiket->codigo}}</strong></h35>
                            
                                <h5> <strong>Pasajero</strong> </h5>
                                <ul>
                                  <li> <strong>Identificación: </strong>{{$tiket->pasajero->identificacion}} </li>
                                  <li><strong>Nombre: </strong>{{$tiket->pasajero->nombres}} {{$tiket->pasajero->apellidos}} </li>
                                  
                                </ul>
                        </div>
                   
                @endforeach
                 </div>
            </div>
            <div class="col-lg-12 tabs_reserva">
                    <div class="col-lg-12">
                         <h2> Detalles de mi reserva</h2>
                         <table class="table">
                            <thead>
                                <tr>
                                    <th>Cantidad de pasajeros</th>
                                    
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                 
                                    <td> {{$cant_pasajeros}} </td>
                                    <td>{{$reserva->costo_total}}</td>
                                </tr>
                     
                            </tbody>
                          </table>
                    </div>
                
            </div>
            <div class="col-lg-12 btn_reserva">
                <button onclick="window.location.href='/Users/christian%20duban/Documents/GitHub/botestheme/Oleose/Freeze/pasajeros.html'"> CONTINUAR</button>
            </div>
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
