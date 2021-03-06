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
	
            <form method="post" action="SISVET-r-veterinaria.php#ventana10">
                NEW VETERINARI!
                <table>
                    <tr>
                        <td>
                            <input type="text" name="name_vet" placeholder="Nombre de la veterinaria" class="entrada1" required="on">
                        </td>
                        <td>
                            <input type="email" name="correo_vet" placeholder="Correo de la veterinaria" class="entrada1" required="on">
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
                Celular de la veterinaria:<br>
                <select class="selector2" name="codigo" size="1">
                    <option value="+591">+591</option>
                    <option value="+57">+57</option>
                    <option value="+53">+53</option>
                    <option value="+494">+494</option>
        
                </select>
                <input type="number" name="movil" placeholder="xxx-xx-xxx" class="entrada2" required="on"><br>
                Carnet del dueño de la veterniaria:<br>
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
                Ciudad
                <select class="selectorC" name="codigocity" size="1">
                    <option value="Sucre">Sucre</option>
                    <option value="Cochabamba">Cochabamba</option>
                    <option value="Tarija">Tarija</option>
                    <option value="Pando">Pando</option>
                    <option value="Trinida">Trinida</option>
                    <option value="Santa Cruz">Santa Cruz</option>
                    <option value="Potosi">Potosi</option>
                    <option value="Oruro">Oruro</option>
                    <option value="La Paz">La Paz</option>
        
                </select><br>
                Descripcion de la ubicacion de la veterinaria:<br>
                <input type="text" name="ubicacion" placeholder="detallado" class="entrada1" required="on">
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
	$usuario = $_POST['name_vet'];
	$correo = $_POST['correo_vet'];
	$pass = $_POST['contrasena'];
    $pass1 = $_POST['contrasena2'];
	$codi = $_POST['codigo'];
	$telefono = $_POST['movil'];
	$codic = $_POST['codigoc'];
    $carnet = $_POST['carnet'];
    $city = $_POST['codigocity'];
	$ubic = $_POST['ubicacion'];
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
	$sql=mysqli_query($link, "SELECT * FROM veterinaria WHERE correo_vet='$correo'");
	if ($aux = mysqli_fetch_array($sql)) 
	{
		//$X = md5($pass);
		die("el correo ya esta en uso<br>ingrese con otro<br>");
	}
	//hhhhhhhhhhhhhhhhhhhhhhhh
	$sql=mysqli_query($link, "SELECT * FROM veterinaria WHERE car_due='$carnet'");
	if ($aux = mysqli_fetch_array($sql)) 
	{
		//$X = md5($pass);
		die("el carnet ya esta en uso<br>revise de nuevo <br>");
	}
	//hhhhhhhhhhhhhhhhhhhhhhhh
	$sql=mysqli_query($link, "SELECT * FROM veterinaria WHERE cel_vet='$telefono'");
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

	$sql = "INSERT INTO veterinaria (id, nombre_vet, correo_vet, contra1_vet, contra2_vet, cod_cel_vet, cel_vet, cod_car_due, car_due, city_vet, ubicacion_vet, terminos_vet, f_reg, estado_vet) VALUES ('','$usuario','$correo','$pass','$contrasenak','$codi','$telefono','$codic','$carnet','$city','$ubic','$termino',CURRENT_TIMESTAMP,'$estado')";
         

	//comprobar errores
	if ($link->query($sql) === TRUE)
	{
		echo "<br>:::::::::::::::::::::::::::::::::::::::::::::<br>";
		echo "Veterinaria: $usuario activo";
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