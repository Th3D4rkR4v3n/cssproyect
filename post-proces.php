<?php
session_start();

require 'post-database.php';

$imagen = $_FILES['imagen']['name'];


$destino = $_SERVER['DOCUMENT_ROOT'] . '/proyectsfiles/images/';

move_uploaded_file($_FILES['imagen']['tmp_name'],$destino.$imagen);

$ruta = $destino . $imagen;


$sql = "INSERT INTO feed (descripcion, imagen) VALUES('$descripcion','$imagen')";

if (mysqli_query($connection, $sql)) {
    header ('Location: home.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}


?>