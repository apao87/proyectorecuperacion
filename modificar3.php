<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysql_connect("localhost","root","") or
	  die("Problemas en la conexion");
	mysql_select_db("mareas",$conexion) or
	  die("Problemas en la selección de la base de datos");
	$registros=mysql_query("update marea
	                         set primBajamar='$_REQUEST[primBajamarnuevo]' 
	                         where primBajamar='$_REQUEST[primBajamarviejo]'",$conexion) or
	  die("Problemas en el select:".mysql_error());
	  echo "La primera bajamar fue modificada con exito"."<br>";
	  

	  $registros=mysql_query("update marea
	                         set primPleamar='$_REQUEST[primPleamarnuevo]' 
	                         where primPleamar='$_REQUEST[primPleamarviejo]'",$conexion) or
	  die("Problemas en el select:".mysql_error());
	  echo "La primera pleamar fue modificada con exito"."<br>";
	  

	  $registros=mysql_query("update marea
	                         set segBajamar='$_REQUEST[segBajamarnuevo]' 
	                         where segBajamar='$_REQUEST[segBajamarviejo]'",$conexion) or
	  die("Problemas en el select:".mysql_error());
	  echo "La segunda bajamar fue modificada con exito"."<br>";
	  

	  $registros=mysql_query("update marea
	                         set segPleamar='$_REQUEST[segPleamarnuevo]' 
	                         where segPleamar='$_REQUEST[segPleamarviejo]'",$conexion) or
	  die("Problemas en el select:".mysql_error());
	  echo "La segunda pleamar fue modificada con exito"."<br>";

	 
?>
</body>
</html> 