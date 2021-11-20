<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1) {
	    $nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$edad = trim($_POST['edad']);
		$equipo = trim($_POST['equipo']);
	    $idjugador = trim($_POST['idjugador']);
	    $consulta = "INSERT INTO jugador(idjugador, nombre, apellido, edad, equipo) VALUES ('$idjugador','$nombre','$apellido','$edad','$equipo')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Jugador registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor no deje campos vacios!</h3>
           <?php
    }
}

?>