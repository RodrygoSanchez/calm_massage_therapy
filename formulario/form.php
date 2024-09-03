<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$number = $_POST['number'];
$date = $_POST['date'];
$description = $_POST['description'];

$conexion = mysqli_connect('sql104.infinityfree.com', 'if0_37065248','yjy0GIwj5GBUzv','if0_37065248_Calm_massage')
or exit ("NO SE PUDO CONECTAR A BASE DE DATOS");

mysqli_query($conexion, "INSERT INTO consultas VALUES
(DEFAULT, '$name_form','$surname_form','$email_form','$number_form','$date_form','$description_form')");

mysqli_close($conexion);

header('Location:booking.html?ok');
?>

<!-- $conexion = mysqli_connect('localhost', 'root','','programador_web_prueba')
or exit ("NO SE PUDO CONECTAR A BASE DE DATOS"); -->