<?php
session_start();
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
    header("Location: ulogin.php");
  }
?>

<?php include("includes/header.php") ?>
<div class="container p-4">
<div class="row m-0 bg-white justify-content-center align-self-center text-center vh-100  ">
    <div class="col-sm-4 bg-white">
          <?php if(isset($_SESSION['message'])){?>
              <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                  <?= $_SESSION['message'] ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
              </div>
          <?php session_unset();}?>

          <?php if(!empty($_SESSION['message'])): ?>
            <p> <?= $_SESSION['message'] ?></p>
          <?php endif; ?>

          <h1>Nuevo usuario</h1>
          <span>or <a href="ulogin.php">Iniciar Sesión</a></span>

          <form action="usignup.php" method="POST">
            <input name="cedula" type="text" placeholder="Ingrese su cedula">
            <input name="contrasena" type="password" placeholder="Ingrese su contraseña">
            <input type="submit" class="btn btn-success btn-block" value="Enviar">
          </form>
      </div>
  </div>
</div>
<?php include ("includes/footer.php") ?>