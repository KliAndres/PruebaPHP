<?php
include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query= "SELECT * FROM libros WHERE id= $id";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $autor = $row['autor'];
    }
}
if (isset($_POST['update'])){
    $id =$_GET['id'];
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];

    $query = "UPDATE libros set nombre = '$nombre', autor = '$autor' WHERE id=$id";
    mysqli_query($conn, $query);

    $_SESSION['message']= 'Actualizado Correctamente';
    $_SESSION['message_type'] = 'dark';
    header("Location: index.php");
}
?>

<?php include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class ="col-md.4 mx-auto">
            <div class="card-body">
                <form action="editar.php?id=<?php echo $_GET['id']?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre;?>" class="form-control" placeholder ="Actualiza Libro">
                    </div>
                    <div class="form-group">
                    <input type="text" name="autor" value="<?php echo $autor;?>" class="form-control" placeholder ="Actualiza Autor">
                    </div>
                    <button class="btn btn-success" name="update">
                    Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
