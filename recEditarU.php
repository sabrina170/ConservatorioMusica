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
        $cargo2 = $_POST['cargo2'];
        $usuario2 = $_POST['usuario2'];
        $clave2 = $_POST['clave2'];
        
        $id2 = $_POST['id2'];
    
            $respuesta = $servidor->query("UPDATE adminuser 
            SET nombres = '$nombres2', 
            apellidos = '$apellidos2', 
            usuario = '$usuario2', 
            clave = '$clave2',
            cargo = '$cargo2'
             WHERE id = '$id2';");
    
        if (!$respuesta) {
                echo $servidor->error;
        } else {
            echo "<script LANGUAGE='javascript'>
    
            location.href ='usuarios.php';
          </script>";
            }
?>