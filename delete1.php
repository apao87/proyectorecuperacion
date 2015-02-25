<html>
<head>
<title>Borrar mareas</title>
</head>
<body>

<?php

			if (isset($_REQUEST['borrar'])) {
						$borrar = $_REQUEST['borrar'];
					}
			if (isset($_REQUEST['fecha'])) {
						$fecha = $_REQUEST['fecha'];
					}

			$conexion=mysql_connect("localhost","root","") 
			 	or die("Problemas en la conexion");
				mysql_select_db("mareas",$conexion) or
			  	die("Problemas en la seleccion de la base de datos");

			$sql=mysql_query("select fecha from marea where fecha='$_REQUEST[fecha]'",$conexion) or
  					   die("Problemas en el select:".mysql_error());

  	        if ($reg=mysql_fetch_array($sql))
  	        {
  	        	mysql_query("delete from marea where fecha='$_REQUEST[fecha]'",$conexion) or
    			die("Problemas en el select:".mysql_error());
 			    echo "Se efectuó el borrado de las mareas de esta fecha.";
  	        }
  	        else
				{
				  echo "No existen las mareas del día indicado";
				}
				mysql_close($conexion);

?>

</body>
</html>