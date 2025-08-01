<?php
session_start();
?>
<header class="navbar">
  <div class="nav-logo">VENEZIA</div>
  <nav class="nav-menu">
    <a href="index.php">Inicio</a>
    <a href="servicios.php">Servicios</a>
    <a href="nosotros.php">Nosotros</a>

    <?php if (isset($_SESSION['usuario_id'])): ?>
        <span style="color:white; margin-left:20px;">👋 Hola, <?php echo $_SESSION['usuario_nombre']; ?></span>
    <?php else: ?>
        <a href="login.php">Login</a>
    <?php endif; ?>
  </nav>
</header>

<?php if (isset($_SESSION['usuario_id'])): ?>
  <a href="logout.php" class="logout-btn">Cerrar sesión</a>
<?php endif; ?>

<style>
.logout-btn {
  position: fixed;
  top: 15px;
  right: 20px;
  background: #ff3366;
  color: white;
  padding: 8px 15px;
  border-radius: 20px;
  font-weight: bold;
  text-decoration: none;
  transition: 0.3s;
  box-shadow: 0px 3px 10px rgba(0,0,0,0.3);
}
.logout-btn:hover {
  background: #e62e5c;
}
</style>
