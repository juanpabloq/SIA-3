<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

$coneccion=mysql_connect("localhost","root",""); //crea conexion
mysql_select_db("ejemplo",$coneccion); // selecciona la tabla

$r=mysql_query("select * from alumno ", $coneccion); //consulta

$n=mysql_num_rows($r); //numero de registros
?><br>
<!--
<table>
<tr>
  <td><strong>rut</strong></td><td><strong>nombre</strong></td><td><strong>apellido</strong></td><td><strong>edad</strong></td></tr>
<?php
/*

	for($i=0;$i<$n;$i++)
	{
		echo "<tr>";
		for($j=0;$j<4;$j++)
		{
			echo "<td>".mysql_result($r,$i,$j)."</td>";     
		}
		echo "</tr>";
	}

*/
?>
</table>

-->

<?php
while($v=mysql_fetch_array($r))
	{
		echo $v[0]." ".$v[1]."<br>";				   
	}
						   

?>

<!-- mysql_fetch_array y mysql_result son incompatible -->

</body>
</html>