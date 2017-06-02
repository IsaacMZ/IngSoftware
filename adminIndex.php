<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Import FontAwesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="utf-8">
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
                        <li class="active"><a href="#">Inicio</a></li>
                        <li><a href="agregarCliente.php">Agregar cliente</a></li>
                        <li><a href="agregarCuenta.php">Agregar cuenta</a></li>
                        <li><a href="agregarTarjeta.php">Agregar tarjeta</a></li>
                        <li><a href="removerTarjeta.php">Remover tarjeta</a></li>
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
    <div class="row">
    	<div class="row">
    		<?php
				try{
                    session_start();
                    if(isset($_SESSION["user"])){
                        $name=$_SESSION["user"];
                        echo "<h3>Bienvenido $name</h3>";
                    } 
                    else{
                        header("Location: index.php");
                    }
				}
				catch(Exception $e){
					echo "Ocurrió un error";
				}
			?>
			<br><br><br>
    	</div>	
    </div>
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
            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15 // Creates a dropdown of 15 years to control year
            });
            $(document).ready(function () {
                $('input#Telefono').characterCounter();
            });
        });
    </script>
</body>
</html>