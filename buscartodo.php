<html>
<head>
<title>Buscar mareas</title>
</head>
<body>

<?php
			
				$conexion=mysql_connect("localhost","root","") or 
				  die("Problemas en la conexion");

				mysql_select_db("mareas",$conexion) or
				  die("Problemas en la selección de la base de datos");


				$registros=mysql_query("select * from marea",$conexion) or
				  die("Problemas en el select:".mysql_error());

	
				while ($reg=mysql_fetch_array($registros)){


				//if ($reg=mysql_fetch_array($registros))
				
				  echo "<br>";
				  echo "Las mareas de la fecha ".$reg['fecha']."<br><br>";
				  echo "Primera bajamar: ".$reg['primBajamar']."<br>";
				  echo "Primera pleamar: ".$reg['primPleamar']."<br>";
				  echo "Segunda bajamar: ".$reg['segBajamar']."<br>";
				  echo "Segunda pleamar: ".$reg['segPleamar']."<br>";	

				  } 
			
				mysql_close($conexion);

?>

</body>
</html>