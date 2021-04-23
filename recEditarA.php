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
        $curso2 = $_POST['curso2'];
        $fecha_inicio2 = $_POST['fecha_inicio2'];
        $fecha_fin2 = $_POST['fecha_fin2'];
        $edad2 = $_POST['edad2'];
        $observaciones2 = $_POST['obsevaciones2'];
        $id_alum2 = $_POST['id_alum2'];
        $id_pro2 = $_POST['id_pro2'];
    
            $respuesta = $servidor->query("UPDATE `alumno` 
            SET `nombres` = '$nombres2', 
            `apellidos` = '$apellidos2', 
            `especialidad` = '$especialidad2', 
            `edad` = '$edad2', 
            `obsevaciones` = '$observaciones2', 
            `curso` = '$curso2', 
            `fecha_inicio` = '$fecha_inicio2',
            `fecha_fin` = '$fecha_fin2'
             WHERE `alumno`.`id_alum` = '$id_alum2';");
    
        if (!$respuesta) {
                echo $servidor->error;
        } else {
            echo "<script LANGUAGE='javascript'>
    
            location.href ='alumnos.php?id_pro=$id_pro2';
          </script>";
            }
?>