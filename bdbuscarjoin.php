<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

$coneccion=mysql_connect("localhost","root",""); //crea conexion
mysql_select_db("ejemplo",$coneccion); // selecciona bd

$rut=$_GET['txtrut'];

$r=mysql_query("select alumno.nombre, alumno.apellido, alumno.edad from alumno where rut='$rut'");
$numero=mysql_num_rows($r);


if ($numero=0)
{
	echo "no existe el alumno";
}
else
{
	while($v=mysql_fetch_array($r))
	{
		echo $v[0]." ".$v[1].$v[2]."<br>";	
				
	}
	
	

	$r2=mysql_query("select asignatura.codigo, asignatura.nombre, cursar.promedio
					from asignatura join cursar
					on asignatura.codigo=cursar.codigo
					join alumno
					on alumno.rut = cursar.rut
					where alumno.rut = '$rut'");
	
	if (mysql_num_rows
	while($v1=mysql_fetch_array($r2))
	{
		echo $v1[0]." ".$v1[1].$v1[2]."<br>";			
	}
}
		
?>
</body>
</html>