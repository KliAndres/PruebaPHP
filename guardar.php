<?PHP
session_start();
include("db.php");
if (isset($_POST['guardarl'])){
    $nombre = $_POST['nombre_libro'];
    $autor = $_POST['autor_libro'];

    $query = "INSERT INTO libros(nombre, autor) VALUES('$nombre', '$autor')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed");
    }

    $_SESSION['message'] = 'Libro Agregado';
    $_SESSION['message_type'] = 'success';
    header("Location: index.php");
}

?>