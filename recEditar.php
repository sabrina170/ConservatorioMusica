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
    
        $nombres2 = $_POST['nombres2'];
        $apellidos2 = $_POST['apellidos2'];
        $especialidad2 = $_POST['especialidad2'];
        $telefono2 = $_POST['telefono2'];
        $dni2 = $_POST['dni2'];
        $id_pro2 = $_POST['id_pro2'];
    
            $respuesta = $servidor->query("UPDATE `profesor` 
            SET `nombres` = '$nombres2', 
            `apellidos` = '$apellidos2', 
            `especialidad` = '$especialidad2', 
            `telefono` = '$telefono2', 
            `dni` = '$dni2'
             WHERE `profesor`.`id_pro` = '$id_pro2';");
    
        if (!$respuesta) {
                echo $servidor->error;
        } else {
            echo "<script LANGUAGE='javascript'>
    
                            location.href ='profesores.php';
          </script>";
            }
?>