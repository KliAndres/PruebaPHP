<?php
session_start();

include("db.php");
if (isset($_POST['cedula']) && isset($_POST['contrasena'])) {
    $cedula = $_POST['cedula'];
    $pass = $_POST['contrasena'];

    if (empty($cedula)){
        header("Location: uindex.php?error=Cedula es requerida");
        exit();
    }else if(empty($pass)){
        header("Location: uindex.php?error=Contraseña es requerida");
        exit();
    }else{
        $query ="SELECT id, cedula, contrasena FROM users WHERE cedula = '$cedula' AND contrasena = '$pass'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
            if($row['cedula'] === $cedula && $row['contrasena']=== $pass){
                $_SESSION['cedula'] = $row['cedula'];
                $_SESSION['contrasena'] = $row['contrasena'];
                $_SESSION['id'] = $row['id'];
                header("Location: index.php");
            }else{
				header("Location: uindex.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: uindex.php?error=Incorect User name or password");
	        exit();
        }
    }
}else{
    header("Location: uindex.php");
}

?>