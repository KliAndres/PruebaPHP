<?php include("includes/header.php") ?>

    <?php if(!empty($user)): ?>
      <br> Bienvenido. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">
        Cerrar Sesion
      </a>
    <?php else: ?>
      <h1>INICIO DE SESIÓN</h1>

      <a href="ulogin.php">Iniciar Sesión</a> or
      <a href="usignup.php">Registrarse</a>
    <?php endif; ?>

<?php include ("includes/footer.php") ?>