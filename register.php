<?php

include "connection.php";

    if(isset($_POST["registrar"])){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $nota = $_POST['nota'];

        $sql1="INSERT INTO registro (nombre, telefono, correo, nota) VALUES ('$nombre', '$telefono', '$correo', '$nota')";
        mysqli_query($con, $sql1);
    }

    header ("location: index.php");
?>