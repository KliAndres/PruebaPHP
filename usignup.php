<?php
include("db.php");
  if (!empty($_POST['cedula']) && !empty($_POST['contrasena'])) {
    $cedula = $_POST['cedula'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO users (`cedula`, `contrasena`) VALUES ('$cedula', '$contrasena')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed");
    }

    $_SESSION['message'] = 'Registrado Exitosamente';
    $_SESSION['message_type'] = 'success';
    header("Location: ulogin.php");
  }
?>

<?php include("includes/header.php") ?>


    <?php if(!empty($_SESSION['message'])): ?>
      <p> <?= $_SESSION['message'] ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <span>or <a href="ulogin.php">Login</a></span>

    <form action="usignup.php" method="POST">
      <input name="cedula" type="text" placeholder="Ingrese su cedula">
      <input name="contrasena" type="password" placeholder="Ingrese su contraseña">
      <input name="confirm_password" type="password" placeholder="Confirme su contraseña">
      <input type="submit" value="Enviar">
    </form>

<?php include ("includes/footer.php") ?>