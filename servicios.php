<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

  <!-- Barra de navegación -->
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

  <!-- Contenedor de tarjetas -->
  <div class="contenedor-cuadricula" style="margin-top: 100px;">

    <div class="tarjeta">
      <img src="/imagenes/corte.png" alt="Corte de cabello">
      <h3>Corte de Cabello</h3>
      <p>10.000₡</p>
      <a href="agendar.php" class="btn-cita">Agendar cita</a>
    </div>

    <div class="tarjeta">
      <img src="imagenes/mechas.png" alt="Mechas">
      <h3>Mechas</h3>
      <p>75.000₡</p>
      <a href="agendar.php" class="btn-cita">Agendar cita</a>
    </div>

    <div class="tarjeta">
      <img src="imagenes/planchado.png" alt="Planchado">
      <h3>Planchado</h3>
      <p>15.000₡</p>
      <a href="agendar.php" class="btn-cita">Agendar cita</a>
    </div>

    <div class="tarjeta">
      <img src="imagenes/alfapar crema y champu.png" alt="Alfapar champú y mascarilla">
      <h3>Alfapar Champú y Mascarilla</h3>
      <p>45.000₡</p>
      <a href="agendar.php" class="btn-cita">Agendar cita</a>
    </div>

    <div class="tarjeta">
      <img src="imagenes/cejas.png" alt="Diseño de Cejas">
      <h3>Diseño de Cejas</h3>
      <p>8.000₡</p>
      <a href="agendar.php" class="btn-cita">Agendar cita</a>
    </div>

    <div class="tarjeta">
      <img src="imagenes/unas.png" alt="Uñas Acrílicas">
      <h3>Uñas Acrílicas</h3>
      <p>30.000₡</p>
      <a href="agendar.php" class="btn-cita">Agendar cita</a>
    </div>

  </div>

  
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