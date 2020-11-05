<!DOCTYPE html>
<html>
<head>
	<title>Longin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/stylesL.css">


</head>
<body>

<div class="container-fluid contenedor-nav">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">
                <img src="Imagenes/logo.png" class="d-block w-100" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse links-acceso" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Iniciar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registro.php">Registrate</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Informacion
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Veterinarias</a>
                            <a class="dropdown-item" href="#">Referencias</a>
                        </div>
                    </li>

                </ul>

            </div>
        </nav>
    </div>



<div class="formu2">
	<?php
	session_start();
	//declaración de variables de conexión
	$servername = "localhost";
	$username = "root";
	$password = "cv";
	$dbname = "sisvet"; 

	//conexión a base de datos

	$link = new mysqli($servername, $username, $password, $dbname);

	//lectura de datos de formulario

	$correol = $_POST['user'];
	$passl = $_POST['pass'];
	$x=md5($passl);

	if (isset($C)) 
	{
		$C = $_POST['remember'];
	}
	else
	{
		$C = "";
	}

	//consulta para validar usuarios
	//parámetros de consulta: SELECT FROM WHERE

	$sql=mysqli_query($link, "SELECT * FROM admin WHERE coreo='$correol'");
	if ($aux = mysqli_fetch_array($sql)) 
	{
		if ($x==$aux['contrasena2']) 
		{
				$_SESSION['nombre'] = $aux['nombre'];
			    $_SESSION['correo'] = $aux['coreo'];
			    $_SESSION['ape_p'] = $aux['apellido_paterno'];
			    $_SESSION['ape_m'] = $aux['apellido_materno'];
                $_SESSION['cod_ca'] = $aux['cod_ca'];
                $_SESSION['cod_t'] = $aux['cod_phone'];
			    $_SESSION['movil'] = $aux['celular'];
			    $_SESSION['cod_c'] = $aux['cod_carnet'];
			    $_SESSION['carnet'] = $aux['carnet'];
			    $_SESSION['f_reg'] = $aux['f_reg'];
			    $_SESSION['estado'] = $aux['estado'];
			header("location: weladmin.php");
		}
		else
		{
			echo "contraseña incorrecta!";
		}
	}
	else
	{
		echo "Usuario no registrado! duhh!";
	}
	?>
	<br>
		</div>




	
  





   



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
	
</body>
</html>