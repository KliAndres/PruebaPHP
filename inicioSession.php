<?php
include ("db.php");
    $_POST['inisession'];
    $cedula =$_POST['cedula'];
    $contrasena =$_POST['contrasena'];
    $_SESSION['cedula'] = $cedula;
    
    $query= "SELECT * FROM usuarios where cedula= \'\".$cedula.\"\' AND contraseña= \'\".$contrasena.\"\'limit 1";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) == 1){
        $_SESSION['message'] = 'Session iniciada correctamente';
        $_SESSION['message_type'] = 'success';
        header("Location: index.php");
    }
    else{
        $_SESSION['message'] = 'Revise sus credenciales';
        $_SESSION['message_type'] = 'alert';
        exit();
    }

?>