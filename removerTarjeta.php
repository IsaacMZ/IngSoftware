<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Tarjeta</title>
	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Import FontAwesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="utf-8">
     <?php
        try{
            session_start();
            if(isset($_SESSION["user"])){
                $name=$_SESSION["user"];
            } 
            else{
                header("Location: index.php");
            }
        }
        catch(Exception $e){
            echo "Ocurrió un error";
        }
    ?>
</head>
<body>
	<!-- Logo -->
    <div class="center">
        <div class="parallax-container">
            <div class="parallax">
                <img class="responsive-img" src="images/city.jpg">
            </div>
            <!-- Menú -->
            <nav>
                <div class="nav-wrapper">
                    <ul class="right hide-on-med-and-down">
                    	<li><a href="adminindex.php">Inicio</a></li>
                        <li><a href="agregarCliente.php">Agregar cliente</a></li>
                        <li><a href="agregarCuenta.php">Agregar cuenta</a></li>
                        <li><a href="agregarTarjeta.php">Agregar tarjeta</a></li>
                        <li class="active"><a href="#">Remover tarjeta</a></li>
                        <li><a href="removerCliente.php">Remover cliente</a></li>
                        <li><a href="compra.php">Compra</a></li>
                        <li><a href="transaccion.php">Transacción</a></li>
                        <li><a href="consultarClientes.php">Consultar clientes</a></li>
                        <li><a href="Logout.php">Cerrar sesión</a></li>
                    </ul>
                </div>
            </nav>
            <h1><a href="adminindex.php" id="logo"><img class="reponsive-image" src="images/Logo-Try-&-Buy.png" width=auto height="350px" lang="300"  /></a></h1>
        </div>
    </div>

    <div class="container">
    	<!-- Mensaje del servidor -->
	    <div class="row">
	    	<div class="row">
	    		<br>
	    		<?php
					try{
						if(isset($_GET["msg"])){
							echo $_GET["msg"];
						}
					}
					catch(Exception $e){

					}
				?>
	    	</div>
		</div>

		<!-- Formulario para eliminar -->
		<div class="row">
			<h3>Ingrese los datos de la tarjeta</h3>
			<form action="EliminarTarjeta.php" method="POST" class="col s12">
				<div class="row">
                    <div class="input-field col s12">
                        <i class="fa fa-user prefix" aria-hidden="true"></i>
                        <input type="text" name="rfc" required="true">
                        <label for="icon_prefix">Ingresa el RFC</label>
                    </div>
                    <br>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="fa fa-credit-card prefix" aria-hidden="true"></i>
                        <input type="text" name="tar" required="true">
                        <label for="icon_prefix">Ingresa el Número de Tarjeta</label>
                    </div>
                    <br>
                </div>
				<input class="btn waves-effect waves-teal right-align" type="submit" name="eliminar" value="Eliminar"><br>
			</form>
		</div>
	</div>

	<!--- Footer-->
    <footer class="page-footer">
    	<div class="footer-copyright ">
            <div class="container ">
                Try & Buy © | 2017
                <a class="grey-text text-lighten-4 right " href="#! ">Ing. Software | ESCOM | IPN</a>
            </div>
        </div>
    </footer>
    
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.parallax').parallax();
            $('select').material_select();
        });
    </script>
</body>
</html>