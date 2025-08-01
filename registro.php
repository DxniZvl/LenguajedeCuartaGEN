<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "venezia";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die(" Error de conexión: " . $conn->connect_error);
    }

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password_plain = $_POST['password'];
    $password_hash = password_hash($password_plain, PASSWORD_DEFAULT);

    $sql_check = "SELECT id FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        echo "
        <style>
          body { font-family: Arial; text-align: center; background: #f8d7da; padding-top: 100px; }
          .mensaje { background: white; padding: 40px; border-radius: 15px; display: inline-block; box-shadow: 0px 4px 15px rgba(0,0,0,0.2); }
          a { display: inline-block; margin-top: 20px; text-decoration: none; background: black; color: white; padding: 10px 20px; border-radius: 8px; transition: 0.3s; }
          a:hover { background: #ff3366; }
        </style>
        <div class='mensaje'>
          <h2> Ya estás registrado</h2>
          <p>El correo <strong>$email</strong> ya está en nuestra base de datos.</p>
          <a href='login.php'>➡ Iniciar sesión</a>
        </div>
        ";
        exit();
    } else {
        $sql_insert = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password_hash')";
        if ($conn->query($sql_insert) === TRUE) {
            echo "
            <style>
              body { font-family: Arial; text-align: center; background: #d4edda; padding-top: 100px; }
              .mensaje { background: white; padding: 40px; border-radius: 15px; display: inline-block; box-shadow: 0px 4px 15px rgba(0,0,0,0.2); }
              a { display: inline-block; margin-top: 20px; text-decoration: none; background: black; color: white; padding: 10px 20px; border-radius: 8px; transition: 0.3s; }
              a:hover { background: #ff3366; }
            </style>
            <div class='mensaje'>
              <h2> ¡Registro exitoso!</h2>
              <p>Bienvenido <strong>$nombre</strong>. Ya puedes agendar citas.</p>
              <a href='login.php'>➡ Iniciar sesión</a>
            </div>
            ";
            exit();
        } else {
            echo " Error: " . $sql_insert . "<br>" . $conn->error;
            exit();
        }
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro - VENEZIA</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header class="navbar">
    <div class="nav-logo">VENEZIA</div>
    <nav class="nav-menu">
      <a href="index.php" class="activo">Inicio</a>
      <a href="servicios.php">Servicios</a>
      <a href="nosotros.php">Nosotros</a>
      

      <?php if (isset($_SESSION['usuario_id'])): ?>
          <!--  Si está logueado -->
          <span style="color:white; margin-left:20px;">👋 Hola, <?php echo $_SESSION['usuario_nombre']; ?></span>
          <a href="logout.php">Cerrar sesión</a>          
      <?php else: ?>
          <!--  Si NO está logueado -->
          <a href="login.php">Login</a>
      <?php endif; ?>
    </nav>
  </header>

<section class="form-citas">
  <h2> Registro de Usuario</h2>
  <p>Crea tu cuenta para poder agendar citas en línea.</p>

  <form action="registro.php" method="POST" class="agendar-form">
    <label for="nombre">Nombre completo:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" class="btn-cita"> Registrarse</button>
  </form>
</section>
 <section class="extra-section">
      <h2>¿Por qué elegir Venezia?</h2>
      <ul>
        <p>• Atención personalizada y asesoramiento profesional</p>
        <p>• Productos premium y tratamientos de alta calidad</p>
        <p>• Ambiente relajante y experiencia única</p>
      </ul>
    </section>
</body>
</html>
