<!DOCTYPE html>
<html>
<head>
	<title>SISVET</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/stylesUSER.css">


</head>
<body>
	<?php
		session_start();
		if (@!$_SESSION['nombre']) 
		{
			header("location: login.html");
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
                        <a class="nav-link" href="weluser.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Programar ficha</a>
                    </li>
                    

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="l22" src="Iconos/usuario.png" width="35" height="35">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <?php
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
                            <a class="dropdown-item" href="weluser-vm.php">Ver mascotas</a>    
                            <a class="dropdown-item" href="weluser-vet.php">Veterinarias</a>
                            <a class="dropdown-item" href="#">Block</a>
                            <a class="dropdown-item" href="#">Referencias</a>
                        </div>
                    </li>

                    

                </ul>

            </div>
        </nav>
    </div>
    



    <div class="container contenedor-expositores navbar-dark">

        <div class="expositores-text">
            <h3>Mis mascotas</h3>
        </div>
        <div class="row">
        <?php
			//conexión a DB
	//si funciona solo tenemos que cambiar la tabla cuando cambiemos a la tabla mascotas
			$servername = "localhost";
			$username = "root";
			$password = "cv";
			$dbname = "sisvet"; 
			//enlace a DB
			$link = new mysqli ($servername, $username, $password, $dbname);
			//verificar enlace
			if ($link->connect_error)
			{
				die ("oops!! some went wrong :/" . $link->connect_error);
			}
			$cart=$_SESSION['carnet'];
			//realizar consulta, extraer datos
		$data = mysqli_query($link, "SELECT * FROM mascotas WHERE car_due='$cart'")
				or die("no tiene mascotas registradas....<br>vicite la veterinaria mas cercana para registrar a su mascota");
			
			
			while ($var = mysqli_fetch_array($data)) 
			{
                
                $foto=$var['foto'];
                echo "<div class='col-sm-12 col-md-6 col-lg-2'>";
                echo "<img id='image1' src='IM/$foto' class='d-block w-100' alt=''>";
                echo "<h5>".$var['n_mascota']."</h5>";
                echo "<h5>".$var['color']."</h5>";
                echo "<h5>".$var['tamano']."</h5>";
                echo "<h5>".$var['sexo']."</h5>";
                echo "<h5>".$var['especie']."</h5>";
                echo "<h5>".$var['raza']."</h5>";
                echo "</div>";
                
                
				//echo "<br>";
			}
			
			mysqli_close($link);
					
		?>
        
<a href="weluser-vm.php"><h3>Actualizar?</h3></a>
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