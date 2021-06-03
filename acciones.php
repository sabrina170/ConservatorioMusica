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
            VALUES (NULL, '$nombres', '$apellidos', '$usuario', '$clave',
            '$cargo', '$tipo');");

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



    case  'RegistrarCurso':

        require_once('conexion.php');

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
            echo $cn->error;
        } else {
            echo 1;
        }

        break;

    case 'BuscarColegio':
        require_once('conexion.php');

        $idcategoria = $_POST['idcategoria'];
        $subcategorias = $servidor->query("SELECT * FROM subcategoria WHERE id_cat = '$idcategoria'");
        // $resultado_sub = mysqli_query($cn, $subcategorias);

        // echo '<option value ="">Selecciona un tipo  </option>';

        if (mysqli_num_rows($subcategorias) == 0) {
            echo '<option value = "-">-</option>';
        } else {

            while ($data = mysqli_fetch_assoc($subcategorias)) {
                echo '<option value = "' . $data['id_sub'] . '">' . $data['nombre'] . '</option>';
            }
        }

        break;
}
