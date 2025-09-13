<?php
$nombre = $_POST ['nombre'];
$edad = $_POST ['edad'];
$dirección = $_POST ['dirección'];
$salario = $_POST ['salario'];
$correo = $_POST ['correo'];
$cargo = $_POST ['cargo'];

echo "<h2>Información recibida</h2>";
echo "El empleado $nombre tiene $edad años.<br>";
echo "Vive en $dirección y su salario es de $salario.";
echo "Su  correo es $correo y su cargo es $cargo.;
?>
