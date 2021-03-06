<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>{{$titulo}}</title>
      <!-- Bootstrap -->
      <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <header>
         <div class="row">
            <!-- logo y datos -->
            <div class="logo col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <a href="home" id = "nav_logo"> <img src="images/logo.png" alt="risotto_restaurante" class="logo" > </a>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12  hidden-xs">
               <p class="direccion">Colombia 702 - Tandil
                  <img src="images/telefono.png"  alt="telefono" class="social2"  > 443-7737
               </p>
            </div>
      </header>
      <div class="barra"> <!-- barra de navegacion -->
      <nav class="navbar navbar-default">
      <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <!--   <a class="navbar-brand" href="#">RISOTERIA</a> -->
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li class="active"> <a href= "#" id= "nav_inicio"> Inicio </a> </li>
      <li class="active"> <a href= "#" id= "nav_menu"> Menu </a> </li>
      <li class="active"> <a  href= "#" id= "nav_contacto"> Contacto </a> </li>
      <li class="active"> <a href= "#" id= "nav_nosotros"> Nosotros </a> </li>
      <!-- <li class="active"> <a  href= "#" id= "iniciarSesion"> Administracion </a> </li> -->
      <li class="active"> <a href= "#" id= "menuAdmin"> <span class="glyphicon glyphicon-lock"></span></a> </li>
      <!-- <li class="active"> <a href="login" id= "login"> Iniciar Sesion </a> </li> -->
      <!-- <li class="active"> <a href="logout" id= "logout"> cerrar sesion </a> </li> -->
      </ul>
      </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
      </nav>
      </div>
      </div>  <!-- fin  barra de navegacion -->
      
