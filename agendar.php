<?php
// Si se envió el formulario, procesamos la cita
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "venezia";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die(" Conexión fallida: " . $conn->connect_error);
    }

    $nombre = $_POST['nombre'];
    $servicio = $_POST['servicio'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    $sql = "INSERT INTO citas (nombre, servicio, fecha, hora) VALUES ('$nombre', '$servicio', '$fecha', '$hora')";

    if ($conn->query($sql) === TRUE) {
        echo "
        <style>
          body { font-family: Arial; text-align: center; background: #f2f2f2; padding-top: 100px; }
          .mensaje { background: white; padding: 40px; border-radius: 15px; display: inline-block; box-shadow: 0px 4px 15px rgba(0,0,0,0.2); }
          a { display: inline-block; margin-top: 20px; text-decoration: none; background: black; color: white; padding: 10px 20px; border-radius: 8px; transition: 0.3s; }
          a:hover { background: #ff3366; }
        </style>
        <div class='mensaje'>
          <h2> ¡Cita agendada con éxito!</h2>
          <p>Gracias <strong>$nombre</strong>. Tu cita para <strong>$servicio</strong> fue reservada el <strong>$fecha</strong> a las <strong>$hora</strong>.</p>
          <a href='servicios.php'>⬅ Volver a Servicios</a>
        </div>
        ";
        exit();
    } else {
        echo " Error al guardar la cita: " . $conn->error;
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
  <title>Agendar Cita - VENEZIA</title>
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
  <h2> Agenda tu cita</h2>
  <p>Completa el formulario para reservar tu cita en nuestro salón de belleza.</p>

  <form action="agendar.php" method="POST" class="agendar-form">
    <label for="nombre">Nombre completo:</label>
    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

    <label for="servicio">Servicio:</label>
    <select id="servicio" name="servicio" required>
      <option value="">-- Selecciona un servicio --</option>
      <option value="Corte de Cabello">Corte de Cabello</option>
      <option value="Mechas">Mechas</option>
      <option value="Planchado">Planchado</option>
      <option value="Alfapar">Alfapar champú y mascarilla</option>
    </select>

    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" required>

    <label for="hora">Hora:</label>
    <input type="time" id="hora" name="hora" required>

    <button type="submit" class="btn-cita"> Confirmar Cita</button>
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
