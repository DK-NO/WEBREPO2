<!DOCTYPE html>
<html>
<head>
	<title>SISVET</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/stylesVET.css">


</head>
<body>
	<?php
		session_start();
		if (@!$_SESSION['nombre_vet']) 
		{
			header("location: veterinario.html");
        }
        if (@!$_SESSION['nombre_dv']) 
		{
			header("location: welvet.php");
		}
    ?>

<div class="container-fluid contenedor-nav">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">
                <img src="Imagenes/logo.png" class="d-block w-100" alt="">
            </a>
            <a class="navbar-brand" href="#">
                 <?php
                     echo "&nbsp&nbsp&nbsp".$_SESSION['nombre_vet'];
                 ?>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse links-acceso" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="welvet-v.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="welvet-rm.php">Registra Mascota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="welvet-ru.php">Registra Usuario</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Trabajos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="welvet-vc.php">Ver Citas</a>    
                            <a class="dropdown-item" href="welvet-be.php">Buscar expediente M.</a>
                            <a class="dropdown-item" href="welvet-pt.php">Programar Tratamineto</a>
                            <a class="dropdown-item" href="welvet-ir.php">Imprecion de Recibo</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="l22" src="Iconos/usuario.png" width="35" height="35">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <?php
                                 echo "&nbsp&nbsp&nbsp".$_SESSION['estado_dv'];
                                 echo "<br>";
				                 echo "&nbsp&nbsp&nbsp".$_SESSION['nombre_dv'];
				                 echo "<br>";
				                 echo "&nbsp&nbsp&nbsp".$_SESSION['correo_dv'];
				                 echo "<br><br>";
                             ?>
                            <a class="dropdown-item" href="welvet-conf.php">Configuracion</a>
                            <a class="dropdown-item" href="logout-vet.php">Cerrar secion</a>
                        </div>
                    </li>
                                        
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Informacion
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Tienda web</a>    
                            <a class="dropdown-item" href="#">Block</a>
                            <a class="dropdown-item" href="#">Referencias</a>
                            <a class="dropdown-item" href="#">Soporte tecnico</a>
                        </div>
                    </li>

                </ul>

            </div>
        </nav>
    </div>
    



    <div class="container-fluid contenedor-carousel">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Fondos/tigre1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="Fondos/cablan1.jpg" class="d-block w-100" alt="...">
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



    <div class="container-fluid contenedor-footer">
        <div class="row">
            <div class="col contenedor-redes">
                <img src="assets/facebook.png" alt="">
            </div>
            <div class="col contenedor-redes">
                <img src="assets/instagram.png" alt="">
            </div>
            <div class="col contenedor-redes">
                <img src="assets/twitter.png" alt="">
            </div>
        </div>
    </div>
    








    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>