<?php
session_start();
if(!$_SESSION["user"]){
	header("Location: index.html");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nosotros</title>
</head>
<body>
	<h1>Nosotros</h1>
	<a href="principal.php">Pricipal</a>
	<a href="logout.php">Cerrar</a>
</body>
</html>