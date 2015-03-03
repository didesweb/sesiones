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
if(isset($_SESSION ["nombre"])) {
echo $_SESSION["nombre"];
}else{
?>
<form action="sesion.php" method="post">
<input type="text" name="nombre" autofocus required>
<input type="submit" value="Enviar">
</form>
<?php 
}
?>
</body>
</html>
