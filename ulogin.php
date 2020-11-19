<?php include("includes/header.php") ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>
    <span>or <a href="usignup.php">SignUp</a></span>

    <form action="ulogin.php" method="POST">
      <input name="cedula" type="text" placeholder="Ingrese su cedula">
      <input name="contrasena" type="password" placeholder="Ingrese su contraseña">
      <input type="submit" value="Submit">
    </form>

<?php include ("includes/footer.php") ?>