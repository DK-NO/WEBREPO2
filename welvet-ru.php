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
	
            <form method="post" action="welvet-ru.php#ventana10">
                Reistro Usuario!
                <table>
                    <tr>
                        <td>
                            <input type="text" name="usuario" placeholder="Nombre" class="entrada1" required="on">
                        </td>
                        <td>
                            <input type="email" name="correo" placeholder="mail" class="entrada1" required="on">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="apellido_p" placeholder="Apellido Paterno" class="entrada1" required="on">
                        </td>
                        <td>
                            <input type="text" name="apellido_m" placeholder="Apellido Materno" class="entrada1" required="on">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="contrasena" placeholder="contraceña" class="entrada1" required="on">
                        </td>
                        <td>
                            <input type="password" name="contrasena2" placeholder="repita la contraceña" class="entrada1" required="on">
                        </td>
                    </tr>
                </table>
                
                <select class="selector2" name="codigo" size="1">
                    <option value="+591">+591</option>
                    <option value="+57">+57</option>
                    <option value="+53">+53</option>
                    <option value="+494">+494</option>
        
                </select>
                <input type="number" name="movil" placeholder="xxx-xx-xxx" class="entrada2" required="on"><br>
                <select class="selector2" name="codigoc" size="1">
                    <option value="CH">CH</option>
                    <option value="CB">CB</option>
                    <option value="TA">TA</option>
                    <option value="BN">BN</option>
                    <option value="ST">ST</option>
                    <option value="PT">PT</option>
                    <option value="OR">OR</option>
                    <option value="LP">LP</option>
        
                </select>
                <input type="number" name="carnet" placeholder="Carnet.." class="entrada2" required="on"><br>
                Fecha de nacimineto:<br>
                <input type="date" name="nacimiento" min="1970-01-01" max="2003-12-31" class="entrada1" required="on"><br>
                Genero
                <select class="selector3" name="genero" size="1">
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
                <br>
                <label>
                    <input type="checkbox" name="terminos" value="acepto" required="on" title="must accept!!"> terminos y condiciones
                </label>
                <br>
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
	$usuario = $_POST['usuario'];
	$correo = $_POST['correo'];
	$ap_p = $_POST['apellido_p'];
	$ap_m = $_POST['apellido_m'];
	$pass = $_POST['contrasena'];
	$pass1 = $_POST['contrasena2'];
	$codi = $_POST['codigo'];
	$telefono = $_POST['movil'];
	$codic = $_POST['codigoc'];
	$carnet = $_POST['carnet'];
	$nacimiento = $_POST['nacimiento'];
	$genero = $_POST['genero'];
	$termino = $_POST['terminos'];
	
	
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
	$sql=mysqli_query($link, "SELECT * FROM usuario WHERE correo='$correo'");
	if ($aux = mysqli_fetch_array($sql)) 
	{
		//$X = md5($pass);
		die("el correo ya esta en uso<br>ingrese con otro<br>");
	}
	//hhhhhhhhhhhhhhhhhhhhhhhh
	$sql=mysqli_query($link, "SELECT * FROM usuario WHERE carnet='$carnet'");
	if ($aux = mysqli_fetch_array($sql)) 
	{
		//$X = md5($pass);
		die("el carnet ya esta en uso<br>revise de nuevo <br>");
	}
	//hhhhhhhhhhhhhhhhhhhhhhhh
	$sql=mysqli_query($link, "SELECT * FROM usuario WHERE celular='$telefono'");
	if ($aux = mysqli_fetch_array($sql)) 
	{
		//$X = md5($pass);
		die("el telefono ya esta en uso<br>revise de nuevo <br>");
	}

	//validar campos de formulario

	if ($pass != $pass1) 
	{
		die("la contraseña no councide");
	}

	//encriptar contraseña de usuario

	$contrasenak = md5($pass);
	$estado="activo";

	//insertar datos en tabla:

	$sql = "INSERT INTO usuario (id, nombre, apellido_paterno, apellido_materno, correo, contrasena1, contrasena2, cod_phone, celular, cod_carnet, carnet, fechdata, genero, terminos, f_reg, estado) VALUES ('','$usuario','$ap_p','$ap_m','$correo','$pass','$contrasenak','$codi','$telefono','$codic','$carnet','$nacimiento','$genero','$termino',CURRENT_TIMESTAMP,'$estado')";



	//comprobar errores
	if ($link->query($sql) === TRUE)
	{
		echo "<br>Usuario<br>";
		echo ": $usuario registrado existosamente";
		echo "<br>";

	}
	else 
	{
		echo "oops! error! x.x<br>";
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