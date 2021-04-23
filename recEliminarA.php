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

        $id_pro2 = $_POST['id_pro2'];
        $id_alum2 = $_POST['id_alum2'];
        $respuesta = $servidor->query("DELETE FROM `alumno` 
             WHERE `alumno`.`id_alum` = '$id_alum2';");
    
        if (!$respuesta) {
                echo $servidor->error;
        } else {
                
            echo "<script LANGUAGE='javascript'>
            location.href ='alumnos.php?id_pro=$id_pro2';
          </script>";
            }
?>