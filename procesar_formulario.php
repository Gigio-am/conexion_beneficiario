<?php
include 'db_connection.php';

// Obtener datos del formulario
$identificacion = $_POST['identificacion'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];



$insertar = "INSERT INTO beneficiario VALUES ('$identificacion', '$nombre', '$apellidos')";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = 'beneficiarios.html';
   </script>";

}else{
    echo "<script language='javaScript'>
//         alert('ERROR:los datos no fueron modificados correctamente al Registro');
//         location.assign('beneficiarios.html')
//         </script>";
}



?>

