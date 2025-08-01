<?php
session_start();

// Si el formulario fue enviado, procesamos el login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "venezia";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die(" Error de conexión: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $password_form = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();

        if (password_verify($password_form, $usuario['password'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['nombre'];

            header("Location: index.php");
            exit();
        } else {
            echo "<h2> Contraseña incorrecta</h2><a href='login.php'>⬅ Volver</a>";
            exit();
        }
    } else {
        echo "<h2> Usuario no encontrado</h2><a href='registro.php'>➡ Registrarse</a>";
        exit();
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión - VENEZIA</title>
  <link rel="stylesheet" href="/css/styles.css">
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
  <h2>¡Bienvenido a VENEZIA!</h2>
  <h2>Iniciar Sesión</h2>
  <p>Ingresa con tu correo y contraseña para agendar citas.</p>

  <form action="login.php" method="POST" class="agendar-form">
    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit" class="btn-cita">➡ Ingresar</button>
    <a href="registro.php" class="signup-btn">¿No tienes cuenta? Regístrate</a>

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
