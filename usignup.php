<?php
include("db.php");
  if (!empty($_POST['cedula']) && !empty($_POST['contrasena'])) {

    function validar($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $cedula = validar($_POST['cedula']);
    $contrasena = validar($_POST['contrasena']);

    $query = "INSERT INTO users (`cedula`, `contrasena`) VALUES ('$cedula', '$contrasena')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed");
    }

    $_SESSION['message'] = 'Registrado Exitosamente';
    $_SESSION['message_type'] = 'success';
    header("Location: index.php");
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
      <input type="submit" value="Enviar">
    </form>

<?php include ("includes/footer.php") ?>