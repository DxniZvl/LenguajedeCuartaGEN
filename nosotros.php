<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nosotros</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <?php include 'header.php'; ?>

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

  <!-- Portada -->
  <section class="hero">
    <div>
      <h1>Contáctanos</h1>
      <p>Estamos para servirte. Aquí encontrás nuestras redes, ubicación y cómo comunicarte con nosotros.</p>
    </div>
  </section>

  <!-- Sección de contacto visual -->
  <section class="extra-section" id="contacto">
    <h2>Información de contacto</h2>
    <div class="contenedor-cuadricula">

      <div class="tarjeta">
        
        <h3>¿Dónde estamos?</h3>
        <div style="width: 100%; height: 200px; border-radius: 15px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.2);">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.9629293719263!2d-84.18686792492281!3d9.931861890170092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fd007f79df2d%3A0xe00ccca25be3f1b1!2sSal%C3%B3n%20de%20belleza%20VENEZIA-%20Marlin%20Acosta!5e1!3m2!1ses-419!2scr!4v1753992621948!5m2!1ses-419!2scr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <div class="tarjeta">
        
        <h3>Horario de atención</h3>
        <p>
          🕘 Domingo a Viernes: <strong>9:00 a.m. - 6:00 p.m.</strong><br>
          ❌ Sábado: Cerrado
        </p>
      </div>

      <div class="tarjeta">
        
        <h3>Redes sociales</h3>
        <p>
           Email: <a href="mailto:acostamarlin231@gmail.com">acostamarlin231@gmail.com</a><br><br>
           <a href="https://wa.link/mgy5os" target="_blank">WhatsApp</a><br>
           <a href="https://www.facebook.com/share/172WdF8Z4p/" target="_blank">Facebook</a><br>
           <a href="https://www.instagram.com/marlinacostap_?igsh=dDh6MWdidXdkaWxk" target="_blank">Instagram</a>
        </p>
      </div>

    </div>
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