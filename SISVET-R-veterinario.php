<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/stylesADMIN.css">
    <title>Registro</title>
</head>

<body>
<?php
		session_start();
		if (@!$_SESSION['nombre']) 
		{
			header("location: admin.html");
		}
    ?>

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
                        <a class="nav-link" href="weladmin.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="SISVET-R-veterinaria.php">Registrar Veterinaria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="SISVET-R-admin.php">Registrar Admin</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="l22" src="Iconos/usuario.png" width="35" height="35">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <?php
                                 echo "&nbsp&nbsp&nbsp".$_SESSION['cod_ca'];
                                 echo "<br>";
				                 echo "&nbsp&nbsp&nbsp".$_SESSION['nombre'];
				                 echo "<br>";
				                 echo "&nbsp&nbsp&nbsp".$_SESSION['correo'];
				                 echo "<br><br>";
                             ?>
                            <a class="dropdown-item" href="#">Configuracion</a>
                            <a class="dropdown-item" href="logout.php">Cerrar secion</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Informacion
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Ver mascotas</a>    
                            <a class="dropdown-item" href="#">Ver veterinarias</a>
                            <a class="dropdown-item" href="#">Referencias</a>
                        </div>
                    </li>

                </ul>

            </div>
        </nav>
    </div>



    <div class="container contenedor-expositores">

        <div class="formu">
	
            <form method="post" action="SISVET-R-veterinario.php#ventana10">
                REGISTRO VETERINARIO!
                <table>
                    <tr>
                        <td>
                            <input type="text" name="name_vet" placeholder="Nombre veterinari@" class="entrada1" required="on">
                        </td>
                        <td>
                            <input type="email" name="correo_vet" placeholder="Correo" class="entrada1" required="on">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="ap_P_vet" placeholder="Apellido Paterno" class="entrada1" required="on">
                        </td>
                        <td>
                            <input type="text" name="ap_M_vet" placeholder="Apellido Materno" class="entrada1" required="on">
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
		<input type="date" name="nacimiento" min="1970-01-01" max="2001-12-31" class="entrada1" required="on"><br>
		Genero
		<select class="selector3" name="genero" size="1">
			<option value="Hombre">Hombre</option>
			<option value="Mujer">Mujer</option>
		</select>
        <br>
        Estado 
        <select class="selector3" name="codigoSV" size="1">
                    <option value="Veterinario">Veterinario</option>
                    <option value="S Veterinario">Super Veterinario</option>
                    <option value="A Veterinario">Admin Veterinario</option>
        
                </select><br>
                Lugar de trabajo
        <select class="selector3" name="codigoLTV" size="1">
                    <option value="PetsCV">PetsCV</option>
                    <option value="El Fauno">El Fauno</option>
                    <option value="El Arca de Noe">El Arca de Noe</option>
        
                </select><br>
                Hora de trabajo
        <select class="selector3" name="codigoHTV" size="1">
                    <option value="Libre">Libre</option>
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noche">Noche</option>
                    <option value="Madrugada">Madrugada</option>
                    <option value="24 horas">24 horas</option>
                    
        
                </select><br>
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
	$name_vet = $_POST['name_vet'];
	$correo_vet = $_POST['correo_vet'];
	$ap_P_vet = $_POST['ap_P_vet'];
    $ap_M_vet = $_POST['ap_M_vet'];
	$contrasena = $_POST['contrasena'];
	$contrasena2 = $_POST['contrasena2'];
	$codigo = $_POST['codigo'];
	$movil = $_POST['movil'];
	$codigoc = $_POST['codigoc'];
    $carnet = $_POST['carnet'];
    $nacimiento = $_POST['nacimiento'];
    $genero = $_POST['genero'];
    $codigoSV = $_POST['codigoSV'];
    $codigoLTV = $_POST['codigoLTV'];
    $codigoHTV = $_POST['codigoHTV'];
    $terminos = $_POST['terminos'];
    $id_vet = $codigoLTV;
	
	
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
	$sql=mysqli_query($link, "SELECT * FROM veterinario WHERE correo_dv='$correo_vet'");
	if ($aux = mysqli_fetch_array($sql)) 
	{
		//$X = md5($pass);
		die("el correo ya esta en uso<br>ingrese con otro<br>");
	}
	//hhhhhhhhhhhhhhhhhhhhhhhh
	$sql=mysqli_query($link, "SELECT * FROM veterinario WHERE car_dv='$carnet'");
	if ($aux = mysqli_fetch_array($sql)) 
	{
		//$X = md5($pass);
		die("el carnet ya esta en uso<br>revise de nuevo <br>");
	}
	//hhhhhhhhhhhhhhhhhhhhhhhh
	$sql=mysqli_query($link, "SELECT * FROM veterinario WHERE cel_dv='$movil'");
	if ($aux = mysqli_fetch_array($sql)) 
	{
		//$X = md5($pass);
		die("el telefono ya esta en uso<br>revise de nuevo <br>");
	}

	//validar campos de formulario

	if ($contrasena != $contrasena2) 
	{
		die("la contraseña no councide");
	}

	//encriptar contraseña de usuario

	$contrasenak = md5($contrasena);

	//insertar datos en tabla:

	$sql = "INSERT INTO veterinario (id, id_vet, nombre_dv, correo_dv, ap_p_dv, ap_m_dv, pass_1_dv, pass_2_dv, cod_cel_dv, cel_dv, cod_car_dv, car_dv, fechaday_dv, genero_dv, estado_dv, workplace, worktime, terminos_dv, f_reg_doc_vet) VALUES ('', '$id_vet', '$name_vet', '$correo_vet', '$ap_P_vet', '$ap_M_vet', '$contrasena', '$contrasenak', '$codigo', '$movil', '$codigoc', '$carnet', '$nacimiento', '$genero', '$codigoSV', '$codigoLTV', '$codigoHTV', '$terminos', CURRENT_TIMESTAMP)";   

	//comprobar errores
	if ($link->query($sql) === TRUE)
	{
		echo "<br>:::::::::::::::::::::::::::::::::::::::::::::<br>";
		echo "Veterinari@: $name_vet registrado";
		echo "<br>";
		//echo "<a href='login.html'> INICIAR </a>";

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