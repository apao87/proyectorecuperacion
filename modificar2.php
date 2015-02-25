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
    $registros=mysql_query("select * from marea
                           where fecha='$_REQUEST[fecha]'",$conexion) or
      die("Problemas en el select:".mysql_error());

if ($reg=mysql_fetch_array($registros))
{
?>
  <form action="modificar3.php" method="post">
  Ingrese nueva primera bajamar:
  <input type="text" name="primBajamarnuevo" value="<?php echo $reg['primBajamar'] ?>">
  <br>
  <input type="hidden" name="primBajamarviejo" value="<?php echo $reg['primBajamar'] ?>">
  <br>
  Ingrese nuevo primer pleamar:
  <input type="text" name="primPleamarnuevo" value="<?php echo $reg['primPleamar'] ?>">
  <br>
  <input type="hidden" name="primPleamarviejo" value="<?php echo $reg['primPleamar'] ?>">
  <br>
  Ingrese nuevo segundo bajamar:
  <input type="text" name="segBajamarnuevo" value="<?php echo $reg['segBajamar'] ?>">
  <br>
  <input type="hidden" name="segBajamarviejo" value="<?php echo $reg['segmBajamar'] ?>">
  <br>
  Ingrese nuevo segundo pleamar:
  <input type="text" name="segPleamarnuevo" value="<?php echo $reg['segPleamar'] ?>">
  <br>
  <input type="hidden" name="segPleamarviejo" value="<?php echo $reg['segPleamar'] ?>">
  <br>
  <input type="submit" value="Modificar">
  </form>
<?php
    }
    else
      echo "No existen los datos de este día en la base de datos";
?>
</body>
</html> 