<?php
session_start();

//  Si no hay sesión, redirigir al login
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Usuario</title>
</head>
<body>

  <h1>👋 Hola, <?php echo $_SESSION['usuario_nombre']; ?> </h1>
  <p>Bienvenido a tu panel. Aquí podrías ver tus citas, agendarlas, etc.</p>

  <a href="logout.php"> Cerrar sesión</a>

</body>
</html>
