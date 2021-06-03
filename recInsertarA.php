<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:lavender;">

</body>

</html>
<?php

require_once('conexion.php');

// $categoria2 = $_POST['categoria2'];
$categoria = $_POST['categoria'];
$tipo = $_POST['tipo'];
$cantidad = $_POST['cantidad'];
$tiempo = $_POST['tiempo'];
$fecha = $_POST['fecha'];
$id_pro = $_POST['id_pro'];
$id_mes = $_POST['id_mes'];

$respuesta = $servidor->query("INSERT INTO `curso` (`id_curso`, `categoria`, 
`tipo`,  `cantidad`, `tiempo`, `fecha`,`id_pro`, `id_mes`) 
 VALUES (NULL, '$categoria', '$tipo', '$cantidad', '$tiempo', 
 '$fecha',  '$id_pro', '$id_mes');");

if (!$accion) {
    echo $servidor->error;
} else {
    echo "<script LANGUAGE='javascript'>
            location.href ='cursos.php?id_pro=$id_pro&id_mes=$id_mes';
          </script>";
}

?>