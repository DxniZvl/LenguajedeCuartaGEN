
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>home</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="domio-dev-ventajas-1.ico">
</head>

<body>

  <header>
    <h1>Bienvenido/a a mi sitio web</h1>
  </header>

  
  <section class="formulario-contacto">
  <h2>CONTÁCTANOS LLENANDO TODOS LOS CAMPOS</h2>
  <form method="POST" action="">
  <label for="nombre">Nombre</label>
  <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">

  <label for="telefono">Teléfono</label>
  <input type="tel" id="telefono" name="telefono" placeholder="Tu Teléfono">

  <label for="correo">Correo</label>
  <input type="email" id="correo" name="correo" placeholder="Tu Email">

  <label for="mensaje">Mensaje</label>
  <textarea id="mensaje" rows="6" name="mensaje" placeholder="Escribe tu mensaje..."></textarea>

  <button type="submit" name="enviar">ENVIAR</button>
</form>
<?php include("registrar.php"); ?>
</section>


</body>
</html>



