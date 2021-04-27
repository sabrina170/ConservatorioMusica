<?php

require_once('conexion.php');

$accion = $_POST['accion'];

switch ($accion) {


    case  'RegistrarProfesor':


        require_once('conexion.php');

        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $especialidad = $_POST['especialidad'];
        // $horas = $_POST['horas'];
        $telefono = $_POST['telefono'];
        $dni = $_POST['dni'];

        $respuesta = $servidor->query("INSERT INTO `profesor` (`id_pro`, `nombres`, 
        `apellidos`, `especialidad`, `telefono`, `dni`) 
        VALUES (NULL, '$nombres', '$apellidos', '$especialidad', '$telefono', '$dni');");

        if (!$respuesta) {
            echo $servidor->error;
        } else {
            echo 1;
        }
    break;

    case  'RegistrarUsuario':
       require_once('conexion.php');
    
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];
            $tipo = $_POST['tipo'];
            $cargo = $_POST['cargo'];
    
            $respuesta = $servidor->query("INSERT INTO `adminuser` (`id`, `nombres`, 
            `apellidos`, `usuario`, `clave`,`cargo`, `tipo`) 
            VALUES (NULL, '$nombres', '$apellidos', '$usuario', '$clave','$cargo', '$tipo');");
    
            if (!$respuesta) {
                echo $servidor->error;
            } else {
                echo 1;
            }
    break;

    case  'ActualizarProfesor':

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
    
        if (!$accion) {
                echo $cn->error;
        } else {
                echo 1;
            }

    break;     
    
    case 'EliminarProfesor':
        require_once('conexion.php');

        $id_pro2 = $_POST['id_pro2'];
        $respuesta = $servidor->query("DELETE FROM `profesor` 
             WHERE `profesor`.`id_pro` = '$id_pro2';");
    
        if (!$respuesta) {
                echo $servidor->error;
        } else {
                echo 1;
            }
    
    break;

    case  'RegistrarAlumno':
        
        require_once('conexion.php');
            
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $especialidad = $_POST['especialidad'];
        $curso = $_POST['curso'];
        $edad = $_POST['edad'];
        $fecha_inicio = $_POST['fecha_inicio'];
        $fecha_fin = $_POST['fecha_fin'];
        $obsevaciones = $_POST['obsevaciones'];
        $hora = $_POST['hora'];
        $minuto = $_POST['minuto'];
        $profesor = $_POST['profesor'];

        $respuesta = $servidor->query("INSERT INTO `alumno` (`id_alum`, `nombres`, `apellidos`, 
        `edad`, `fecha_inicio`, `fecha_fin`,`hora`, `minuto`,  `curso`, `especialidad`, `obsevaciones`,
         `profesor`) 
         VALUES (NULL, '$nombres', '$apellidos', '$edad', '$fecha_inicio', '$fecha_fin',  '$hora', '$minuto', 
         '$curso', '$especialidad', '$obsevaciones', '$profesor');");

        if (!$accion) {
            echo $cn->error;
        } else {
            echo 1;
        }

            
    break;

    case  'VideoPilares':

        require_once('../conexion.php');
        $docente = $_POST['doc'];

        $respuesta = $servidor->query("DELETE FROM 00salasdocentes WHERE username_sd ='$docente'");
        if ($respuesta) {
            echo 1;
        } else {
            echo $cn->error;
        }
        break;


    case 'ActualizarSala':

        require_once('../conexion.php');

        $docente = $_POST['doc'];
        $enlace = $_POST['enlace'];

        //$respuesta = $servidor->query("UPDATE 00salasdocentes SET url_sd = '$enlace' WHERE username_sd ='$docente'");

        $result = $servidor->query("SELECT username_sd FROM 00salasdocentes WHERE username_sd = '$docente'");

        if($result->num_rows == 0) {
            $respuesta = $servidor->query("INSERT INTO 00salasdocentes (
                id_sd,
                username_sd,
                url_sd) VALUES (
                '0', 
                '$docente', 
                '$enlace')");


            if ($respuesta) {
                echo 1;
            } else {
                echo $cn->error;
            }

       } else {
           $respuesta = $servidor->query("UPDATE 00salasdocentes SET url_sd = '$enlace' WHERE username_sd ='$docente'");
           if ($respuesta) {
            echo 1;
        } else {
            echo $cn->error;
        }
       }

       //$mysqli->close();




        //$accion = $servidor->query("UPDATE 00salasdocentes SET url_sd = '$enlace' WHERE username_sd ='$docente'");
 /*
        if (!$accion) {
            echo $cn->error;
        } else {
            echo 1;
        }
*/
        break;

        // case 'borrarmavarios';
        // require_once('../conexion.php');
        // $codigos = $_POST['hy'];
        // $cod = $_POST['col'];
    
    
        //     foreach ($codigos as $valor) {
        //         echo $valor;
        //         $resultado = mysqli_query($servidor, "DELETE FROM $cod WHERE id = '$valor'");
        //     }
    
        // if ($resultado) {
        //     echo 1;
        // } else {
        //     echo "Hubo algun error" . $servidor->error();
        // }
        // break;

        case 'ActualizarPinLibro':

        require_once('../conexion.php');

        $pin = $_POST['pin'];
        $libros_pin = $_POST['libros_pin'];
        $bloqueo_pin = $_POST['bloqueo_pin'];
        // $bloqueo_pin = $_POST['bloqueo_pin'];


        //$respuesta = $servidor->query("UPDATE 00salasdocentes SET url_sd = '$enlace' WHERE username_sd ='$docente'");

        $result = $servidor->query("UPDATE 00pineslibros SET libros_pin ='$libros_pin' , bloqueo_pin = '$bloqueo_pin'  WHERE pin='$pin'");

            if ($result) {
                echo 1;
            } else {
                echo $cn->error;
            }

        break;

        case 'ActualizarPinLibro2':

        require_once('../conexion.php');

        $pin = $_POST['pin'];
        $libros_pin = $_POST['libros_pin'];
        // $bloqueo_pin = $_POST['bloqueo_pin'];


        //$respuesta = $servidor->query("UPDATE 00salasdocentes SET url_sd = '$enlace' WHERE username_sd ='$docente'");

        $result = $servidor->query("UPDATE 00pineslibros SET libros_pin ='$libros_pin'  WHERE pin='$pin'");

            if ($result) {
                echo 1;
            } else {
                echo $cn->error;
            }

      


}

?>