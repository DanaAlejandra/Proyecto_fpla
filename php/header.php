<?php 
include 'php/inicio.php'; 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>SISTEMA MINIBAR</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="custom/css/custom.css">
  <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">
  <script src="assests/jquery/jquery.min.js"></script>
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>
  <script src="assests/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
<style type="text/css">
  .img{
  margin: 0.8em; 
  height: 120px;
  width: 120px; 
}
</style>
</head>
<body>

<header>
  <div class="container-fluid">
  <img src="img/logohotel.jpg" class="img" >
  </div>
<!--
  DECIDIR MANERA DE MOSTRAR USUARIO
<?php
include('php/conexion.php');
$fecha = date ("j/n/Y");

//echo '<span class="form-control"> Bienvenido '.$_SESSION['username'].' Fecha '.$fecha.'   <a href="cerrar_sesion.php" class="">Salir</a></span>';

//echo '<br>';
?>
-->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      

      <ul class="nav navbar-nav navbar-right">        

        <li id="navDashboard"><a href="menuprincipal.php"><i class="glyphicon glyphicon-list-alt"></i>  Inicio</a></li>   

        <li id="navDashboard"><a href="consulta_inventario.php"><i class="glyphicon glyphicon-pencil"></i> Inventario</a></li>      
      
        <li id="navReport"><a href="reporte.php"> <i class="glyphicon glyphicon-check"></i> Reportes </a></li>

        <li class="dropdown" id="navSetting">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">                        
            <li id="topNavLogout"><a href="cerrar_sesion.php"> <i class="glyphicon glyphicon-log-out"></i> Salir</a></li>            
          </ul>
        </li>        
               
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
</header>
<body>
</div> <!-- container -->
  <!-- file input -->
  
</body>
</html>