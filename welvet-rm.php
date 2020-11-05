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


    
    <div class="container contenedor-expositores">

	
	
		<div class="formu">
	
	<form method="post" action="welvet-rm.php#ventana10">
	<p>REGISTRAR MASCOTAS</p>
		<table>
			<tr>
				<td>
					<input type="number" name="crdm" placeholder="Carnet del Dueño" class="entrada1" required="on">
				</td>
				<td>
					<input type="text" name="nm" placeholder="Nombre de la Mascota" class="entrada1" required="on">
				</td>
			</tr>
		</table>
			Especifique breve
		<table>
			<tr>
				<td>
					<input type="text" name="tm" placeholder="Altura de la Mascota" class="entrada1" required="on">
				</td>
				<td>
					<input type="text" name="cm" placeholder="Color de la Mascota" class="entrada1" required="on">
				</td>
			</tr>
		</table>
		Sexo de la mascota:
		<select class="selector3" name="codsm" size="1">
			<option value="Macho">Macho</option>
			<option value="Hembra">Hembra</option>
		</select><br>
		Especie a la que pertenece:
		<select class="selector3" name="codesdm" size="1">
			<option value="Can">Can</option>
			<option value="Felino">Felino</option>
			<option value="Roedor">Roedor</option>
			<option value="Ave">Ave</option>
		</select><br>
		Especifique brebemente:<br>
		<input type="text" name="radm" placeholder="Raza de la Masota" class="entrada1" required="on">
		<br>
		Fecha de nacimineto:
		<input type="date" name="nacim" min="1970-01-01" max="2020-12-31" class="entrada1" required="on"><br>
		
		
			<input type="file" name="foto"   required="on">
		
		<br><br>
		<input type="submit" value="Registar!" class="boton"><br>
		<br>
	</form>	
</div>
    </div>

    <div id="ventana10">
		<div id="cerrar10">
			<a href="#cerrar">X</a>
		</div>
		<div>
			<br>
            <?php
	$dueno = $_POST['crdm'];
	$nmas = $_POST['nm'];
	$almas = $_POST['tm'];
	$comas = $_POST['cm'];
	$sex = $_POST['codsm'];
	$esp = $_POST['codesdm'];
	$raz = $_POST['radm'];
	$adg = $_POST['nacim'];
	$foto = $_POST['foto'];
	
	
	//crear una conexión a la base de datos:
	
	$servername = "localhost"; //servidor local
	$username = "root";        //usuario por defecto
	$password = "cv";            //contraseña del usuario
	$dbname = "sisvet";    //nombre de la base de datos

	//variable de conexión

	$link = new mysqli($servername, $username, $password, $dbname);

	//verificar si existe conexión

	if ($link->connect_error) 
	{
		die("error!!!" . $link->connect_error);
	}
	//hhhhhhhhhhhhhhhhhhhhhhhh
	//consulta a otra tabla para ver si existe el usuario
	$sql=mysqli_query($link, "SELECT * FROM usuario WHERE carnet='$dueno'");
	if ($aux = mysqli_fetch_array($sql)) 
	{
		/*echo "Dueño      : $dueno <br>";
	die("Usuario no registrado<br>intente denuevo o registre al usuario<br><a href='welcome.php'> INICIAR </a>");*/
	$sql=mysqli_query($link, "SELECT * FROM mascotas WHERE foto='$foto'");
	if ($aux1 = mysqli_fetch_array($sql)) 
	{
		//$X = md5($pass);
		die("La imagen ya esta en uso<br>rebice de nuevo<br>");
	}
    $estado="activo";
    
    $sql = "INSERT INTO mascotas (id, car_due, n_mascota, color, tamano, sexo, f_naci, especie, raza, foto, estado_mascota, mf_reg) VALUES ('','$dueno','$nmas','$comas','$almas','$sex','$adg','$esp','$raz','$foto','$estado',CURRENT_TIMESTAMP)";

	//comprobar errores
	if ($link->query($sql) === TRUE)
	{
		echo "<br>:3 Mascota registrada....<br>";

	}
	else 
	{
		echo "oops! error! x.x<br>";
	}
	}else{
		die("Usuario no registrado<br>intente denuevo o registre al usuario<br><a href='welvet-ru.php'> Registra? </a>");
	}

	
	
	?>
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