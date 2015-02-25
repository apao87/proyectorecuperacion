<html>
<head>
</head>
<body>



<?php

				if (isset($_REQUEST['username'])) {
					$username = $_REQUEST['username'];
				}
				if (isset($_REQUEST['password'])) {
					$password = $_REQUEST['password'];
				}
				if (isset($_REQUEST['log'])) {
					$log = $_REQUEST['log'];
				}


				$conexion=mysql_connect("localhost","root","") or 
				  die("Problemas en la conexion");

				mysql_select_db("mareas",$conexion) or
				  die("Problemas en la selección de la base de datos");

					$registros=mysql_query("select nombre,contrasena
				                       from usuarios where nombre='$_REQUEST[username]' && contrasena='$_REQUEST[password]'",$conexion) or
				  die("Problemas en el select:".mysql_error());
												
				  if ($reg=mysql_fetch_array($registros))
				{
				  echo "Eres el administrador", "<br>";
				  echo "Usuario ".$reg['nombre']."<br>";
				  echo "Password: ".$reg['contrasena']."<br>";
				  require 'admin.php';
				}
				else
				{
				  echo "No eres el administrador","<br>";
				  echo "Usuario ".$reg['nombre']."<br>";
				  echo "Password: ".$reg['contrasena']."<br>";
				}
				mysql_close($conexion);
				
?>

</body>
</html>