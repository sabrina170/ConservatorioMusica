<?php 

$servidor=new mysqli("localhost","root",
"","musica");
$servidor->set_charset("utf8");
if($servidor->connect_error){
die('Error en la conexion '.$servidor->connect_error);


}
