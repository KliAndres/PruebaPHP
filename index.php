<?php session_start();?>
<?php include("db.php") ?>

<?php include("includes/header.php") ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                 </div>
            <?php session_unset();}?>

            <div class="card-card-body">
                <form action="guardar.php" method ="POST">
                    <div class="form-group">
                        <input type="text" name="nombre_libro" class="form-control" placeholder="Nombre del libro" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="autor_libro" class="form-control" placeholder="Autor" autofocus>
                    </div>
                    
                    <input type="Submit" class="btn btn-success btn-block" name="guardarl" value="Guardar">
                </form>
            </div>
        </div>

        <div class="col-md-8">
        <a href="ulogout.php">Cerrar Sesión</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                    <th>Nombre</th>
                    <th>Autor</th>
                    <th>Fecha Agregado</th>
                    <th>Desea</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM libros WHERE autor= 'Cassandra Clare' OR autor = 'JK Rowling' limit 5";  
                        $result_libros= mysqli_query($conn, $query);
                       
                       while($row= mysqli_fetch_array($result_libros)){?>
                        <tr>
                            <td> <?php echo $row['nombre'] ?> </td>
                            <td> <?php echo $row['autor'] ?> </td>
                            <td> <?php echo $row['fecha_publicacion'] ?> </td>
                            <td> 
                                <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="eliminar.php?id=<?php echo $row['id']?>"class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                       <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>

<?php include ("includes/footer.php") ?>