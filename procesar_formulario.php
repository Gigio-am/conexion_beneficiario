<?php
include 'db_connection.php';

// Obtener datos del formulario
$identificacion = $_POST['identificacion'];
$nombres = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = (int)$_POST['edad'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo_electronico = $_POST['correo_electronico'];
$mensaje = $_POST['mensaje'];
$autorizacion = isset($_POST['autorizacion']) ? 1 : 0;

// Establece un usuario_id_usuario existente
$usuario_id_usuario = 1; // Cambia a un valor que exista en la tabla usuario

// Insertar los datos en la tabla beneficiario
$sql = "INSERT INTO beneficiario (usuario_id_usuario, identificacion, nombres, apellidos, edad, pais, ciudad, direccion, telefono, correo_electronico, mensaje, autorizacion) 
VALUES ($usuario_id_usuario, '$identificacion', '$nombres', '$apellidos', $edad, '$pais', '$ciudad', '$direccion', '$telefono', '$correo_electronico', '$mensaje', $autorizacion)";

if ($conexion->query($sql) === TRUE) {
    echo "Datos guardados exitosamente";
    // Esperar 2 segundos antes de redirigir
    header("refresh:2; url=menu_beneficiario.php");
    // O puedes redirigir inmediatamente sin mensaje con:
    // header("Location: menu_beneficiario.php");
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>


