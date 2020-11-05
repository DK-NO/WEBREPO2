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
<?php
		session_start();
		if (@!$_SESSION['nombre_vet']) 
		{
			header("location: veterinario.html");
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
                        <a class="nav-link" href="welvet.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="VET_login.php">Iniciar</a>
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
	//session_start();
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

	$sql=mysqli_query($link, "SELECT * FROM veterinario WHERE correo_dv='$correol'");
	if ($aux = mysqli_fetch_array($sql)) 
	{
        if($_SESSION['nombre_vet'] == $aux['workplace']){
		if ($x==$aux['pass_2_dv']) 
		{
                if ("Veterinario" == $aux['estado_dv'])
                {
                    $_SESSION['nombre_dv'] = $aux['nombre_dv'];
			        $_SESSION['correo_dv'] = $aux['correo_dv'];
			        $_SESSION['ap_p_dv'] = $aux['ap_p_dv'];
			        $_SESSION['ap_m_dv'] = $aux['ap_m_dv'];
                    $_SESSION['pass_1_dv'] = $aux['pass_1_dv'];
                    $_SESSION['pass_2_dv'] = $aux['pass_2_dv'];
                    $_SESSION['cod_cel_dv'] = $aux['cod_cel_dv'];
			        $_SESSION['cel_dv'] = $aux['cel_dv'];
			        $_SESSION['cod_car_dv'] = $aux['cod_car_dv'];
			        $_SESSION['car_dv'] = $aux['car_dv'];
                    $_SESSION['estado_dv'] = $aux['estado_dv'];
                    $_SESSION['f_reg_doc_vet'] = $aux['f_reg_doc_vet'];
			header("location: welvet-v.php");
                }else
                {
                    if ("S Veterinario" == $aux['estado_dv'])
                    {
                        $_SESSION['nombre_dv'] = $aux['nombre_dv'];
			        $_SESSION['correo_dv'] = $aux['correo_dv'];
			        $_SESSION['ap_p_dv'] = $aux['ap_p_dv'];
			        $_SESSION['ap_m_dv'] = $aux['ap_m_dv'];
                    $_SESSION['pass_1_dv'] = $aux['pass_1_dv'];
                    $_SESSION['pass_2_dv'] = $aux['pass_2_dv'];
                    $_SESSION['cod_cel_dv'] = $aux['cod_cel_dv'];
			        $_SESSION['cel_dv'] = $aux['cel_dv'];
			        $_SESSION['cod_car_dv'] = $aux['cod_car_dv'];
			        $_SESSION['car_dv'] = $aux['car_dv'];
                    $_SESSION['estado_dv'] = $aux['estado_dv'];
                    $_SESSION['f_reg_doc_vet'] = $aux['f_reg_doc_vet'];
			header("location: welvet-s.php");
                    }else
                    {
                        if ("A Veterinario" == $aux['estado_dv'])
                        {
                            $_SESSION['nombre_dv'] = $aux['nombre_dv'];
			        $_SESSION['correo_dv'] = $aux['correo_dv'];
			        $_SESSION['ap_p_dv'] = $aux['ap_p_dv'];
			        $_SESSION['ap_m_dv'] = $aux['ap_m_dv'];
                    $_SESSION['pass_1_dv'] = $aux['pass_1_dv'];
                    $_SESSION['pass_2_dv'] = $aux['pass_2_dv'];
                    $_SESSION['cod_cel_dv'] = $aux['cod_cel_dv'];
			        $_SESSION['cel_dv'] = $aux['cel_dv'];
			        $_SESSION['cod_car_dv'] = $aux['cod_car_dv'];
			        $_SESSION['car_dv'] = $aux['car_dv'];
                    $_SESSION['estado_dv'] = $aux['estado_dv'];
                    $_SESSION['f_reg_doc_vet'] = $aux['f_reg_doc_vet'];
			header("location: welvet_a.php");
                        }else
                        {
                            echo "Duhh!, AFK comunicarce con soporte tecnico";
                        }
                    }
                }
		}
		else
		{
			echo "contraseña incorrecta!";
        }
    }else
    {
        echo "no pertenece a este ambiente verifique la veterinaria";
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