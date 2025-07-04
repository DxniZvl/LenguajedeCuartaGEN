<?php
include("con_db.php");

if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $insertar = "INSERT INTO datos(nombre, telefono, correo) VALUES ('$nombre','$telefono','$correo')";

    if (mysqli_query($coneccion, $insertar)) {
        $ultimo_id = mysqli_insert_id($coneccion);
        echo "Datos guardados correctamente.";
    } else {
        echo "Error " . mysqli_error($coneccion);
    }
}
?>
