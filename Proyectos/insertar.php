<?php
include "../conexion/conexion.php";

$fechaHoy=$_POST['fecha-hoy'];
$nombres=$_POST['nombres'];
$f_naci=$_POST['fechaNacimiento'];
$lugarNacimiento=$_POST['lugarNacimiento'];
$departamentoNacimiento=$_POST['departamentoNacimiento'];
$municipioNacimiento=$_POST['municipioNacimiento'];
$rdbtn_sexo=$_POST['rdbtnSexo'];
$nombresMadre=$_POST['nombresMadre'];
$edadMadre=$_POST['edadMadre'];
$nacionalidadMadre=$_POST['nacionalidadMadre'];
$dpiMadre=$_POST['dpiMadre'];
$rdbtn_Madre=$_POST['rdbtnMadre'];
$nombresPadre=$_POST['nombresPadre'];
$edadPadre=$_POST['edadPadre'];
$nacionalidadPadre=$_POST['nacionalidadPadre'];
$dpiPadre=$_POST['dpiPadre'];
$rdbtn_Padre=$_POST['rdbtnPadre'];
$nombresCompariente=$_POST['nombresCompariente'];
$dpiCompariente=$_POST['dpiCompariente'];
$rdbtnCompariente=$_POST['rdbtnCompariente'];
$direccion=$_POST['direccion'];

$sql = "INSERT INTO actas (fecha, nombres, fecha_nacimiento, lugar_nacimiento, depart_nacimiento, municipio_nacimiento, 
genero, name_madre, edad_madre, nacionalidad_madre, dpi_madre, TipoIdent_madre, name_padre, edad_padre, 
nacionalidad_padre, dpi_padre, TipoIdent_padre, name_compariente, dpi_compariente, TipoIdent_compariente,
direccion_compariente) 
VALUES ('$fechaHoy', '$nombres', '$f_naci', '$lugarNacimiento', '$departamentoNacimiento', '$municipioNacimiento',
'$rdbtn_sexo', '$nombresMadre', '$edadMadre', '$nacionalidadMadre', '$dpiMadre', '$rdbtn_Madre', '$nombresPadre',
'$edadPadre', '$nacionalidadPadre', '$dpiPadre', '$rdbtn_Padre', '$nombresCompariente', '$dpiCompariente',
'$rdbtnCompariente', '$direccion')";    

$fechas = "INSERT INTO actas(fecha, lugar_nacimiento) VALUES('$fechaHoy', '$f_naci')";

echo mysqli_query($conexion, $sql);
?>  