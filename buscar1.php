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

				$registros=mysql_query("select fecha,primBajamar, primPleamar,segBajamar,segPleamar
				                       from marea where fecha='$_REQUEST[fecha]'",$conexion) or
				  die("Problemas en el select:".mysql_error());

				if ($reg=mysql_fetch_array($registros))
				{
				  echo "Las mareas de la fecha ".$reg['fecha']."<br><br>";
				  echo "Primera bajamar: ".$reg['primBajamar']."<br>";
				  echo "Primera pleamar: ".$reg['primPleamar']."<br>";
				  echo "Segunda bajamar: ".$reg['segBajamar']."<br>";
				  echo "Segunda pleamar: ".$reg['segPleamar']."<br>";	  
				}
				else
				{
				  echo "No están introducidos los datos de este día.";
				}
				mysql_close($conexion);
/*	
			if (isset($_REQUEST['buscar'])) {
						$borrar = $_REQUEST['borrar'];
					}
			if (isset($_REQUEST['fecha'])) {
						$fecha = $_REQUEST['fecha'];
					}

			$conexion=mysql_connect("localhost","root","") 
			 	or die("Problemas en la conexion");
				mysql_select_db("mareas",$conexion) or
			  	die("Problemas en la seleccion de la base de datos");

			  	$sql=mysql_query("select fecha,primBajamar,primPleamar,segBajamar,segPleamar from marea where fecha='$_REQUEST[fecha]'",$conexion) or
  					   die("Problemas en el select:".mysql_error());

  				if ($reg=mysql_fetch_array($sql))
  				{
  					echo "kaka";
  					echo "Primera bajamar:".$reg['primBajamar']."<br>",
  					echo "Primera pleamar:".$reg['primPleamar']."<br>",
  					echo "Segunda bajamar:".$reg['segBajamar']."<br>",
  					echo "Segunda pleamar:".$reg['segPleamar']."<br>" 
  				}
  				else
  				{
  					echo "No existe el día introducido en la base de datos."
  				}

					mysql_close($conexion);*/

				?>

</body>
</html>