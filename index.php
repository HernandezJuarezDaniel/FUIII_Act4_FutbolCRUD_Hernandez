<!DOCTYPE html>
<html>
<head>
	<title>Registro de Jugador</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de Jugadores</h1>
    	<input type="text" name="idjugador" placeholder="Id Jugador">
    	<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="apellido" placeholder="Apellido">
		<input type="text" name="edad" placeholder="Edad">
		<input type="text" name="equipo" placeholder="Equipo">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("jugador.php");
        ?>
</body>
</html>