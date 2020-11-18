<?php include("db.php")?>

<?php include("includes/header.php") ?>	
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
                <form action="inicioSession.php" method ="POST">
                    <div class="form-group">
                        <input type="text" name="cedula" class="form-control" placeholder="Cedula" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" autofocus>
                    </div>
                    
                    <input type="Submit" class="btn btn-success btn-block" name="inisession" value="Enviar">
                </form>
            </div>
        </div>
    </div>           
<?php include ("includes/footer.php") ?>