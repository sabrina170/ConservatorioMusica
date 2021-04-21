<?php 

$servidor=new mysqli("localhost","root",
"","musica");
if($servidor->connect_error){
die('Error en la conexion '.$servidor->connect_error);


}
?>

