<?php include 'connection.php';
?>
<?php include 'includes/header.php';
?>
    
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="register.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="number" name="telefono" class="form-control" placeholder="Telefono">
                    </div>
                    <div class="form-group">
                        <input type="text" name="correo" class="form-control" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <textarea name="nota" rows="2" class="form-control" placeholder="Notas extra"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="registrar" value="Luce Bien!">
                </form>
            </div>
        </div>

        <div class="col-md-4">
        </div>

    </div>

</div>

<?php include 'includes/footer.php';
?>
        