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

     	<form action="ulogin.php" method="post">
     		<h2>LOGIN</h2>
     		<?php if (isset($_GET['error'])) { ?>
     			<p class="error"><?php echo $_GET['error']; ?></p>
     		<?php } ?>
     		<input type="text" name="cedula" placeholder="Ingrese su cedula"><br>

     		<input type="password" name="contrasena" placeholder="Ingrese su contraseña"><br>

       		<a href="usignup.php">Crear usuario y contraseña</a>
     	
			<button type="submit"class="btn btn-success btn-block" >Iniciar</button>
     	</form>
	</div>
</div>
</div>
<?php include ("includes/footer.php") ?>
