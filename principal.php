<?php
session_start();
if(!$_SESSION["user"]){
	header("Location: index.html");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
</head>
<body>
	<h1>Pagina Principal</h1>
	<p>
		Bienvenido 
		<?php echo $_SESSION["user"]; ?>
	</p>
	<?php echo session_id(); ?>
	<br/>
	<a href="nosotros.php">Nosotros</a> 
	<a href="logout.php">Cerrar</a>
</body>
</html>