<?php 
session_start();
?>
<!DOCTYPE HTML>
	<!-- Didesweb -->  
	<!-- Diseño y desarrollo web -->  
	<!-- http://didesweb.com/-->  
	<!-- Este obra está protegida bajo licencia Creative Commons Attribution --> 
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Didesweb, control de sesion de usuarios en PHP</title>
</head>
<body>
<h1>&copy; Didesweb, control de sesion de usuarios en PHP</h1>
<p>
<a href="index.php">Inicio</a>
<a href="sesion.php">Sesion</a>
<a href="exit.php">Salir</a>
</p>
<?php
if (isset($_POST["nombre"]) && $_POST["nombre"] != " ") {
$_SESSION ["nombre"] = $_POST["nombre"];
echo $_POST["nombre"];
}else{
if(isset($_SESSION["nombre"])) {
echo $_SESSION["nombre"];
}else{
echo '<p>'.'No has iniciado sesión'.'</p>';
}
}
?>
</body>
</html>
