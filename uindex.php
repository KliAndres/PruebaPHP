<?php include("includes/header.php") ?>

<body>
     <form action="ulogin.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input type="text" name="cedula" placeholder="Ingrese su cedula"><br>

     	<input type="password" name="contrasena" placeholder="Ingrese su contraseña"><br>

       <a href="usignup.php">Registrarse</a>
     	
       <button type="submit">Iniciar</button>
     </form>

<?php include ("includes/footer.php") ?>