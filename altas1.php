<html>
<head>
<title>Mareas</title>
</head>
<body>

	<?php
		//Obtener valores introducidos
	//echo('aaaaa');
	

		if (isset($_REQUEST['alta'])) {
			$alta = $_REQUEST['alta'];
		}
		if (isset($_REQUEST['fecha'])) {
			$fecha = $_REQUEST['fecha'];
		}
		if (isset($_REQUEST['primBajamar'])) {
			$primBajamar = $_REQUEST['primBajamar'];
		}
		if (isset($_REQUEST['primPleamar'])) {
			$primPleamar = $_REQUEST['primPleamar'];
		}
		if (isset($_REQUEST['segPleamar'])) {
			$segPleamar = $_REQUEST['segPleamar'];
		}
		if (isset($_REQUEST['segBajamar'])) {
			$segBajamar = $_REQUEST['segBajamar'];
		}




			$conexion=mysql_connect("localhost","root","") 
			  or die("Problemas en la conexion");
			mysql_select_db("mareas",$conexion) or
			  die("Problemas en la seleccion de la base de datos");
			$sql="insert into marea(fecha,primBajamar,primPleamar,segBajamar,segPleamar) values 
			   ('$_REQUEST[fecha]','$_REQUEST[primBajamar]','$_REQUEST[primPleamar]','$_REQUEST[segBajamar]','$_REQUEST[segPleamar]')"; 
			echo($sql);
			$consulta = mysql_query ($sql, $conexion) or die (mysql_error()); 
			//or die ("Fallo en la consulta");
			mysql_close($conexion);
			echo "La marea fue dada de alta.";
		?>

</body>
</html>