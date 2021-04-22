<?php
require_once('conexion.php');
$usuario=$_POST['user'];
$contrasena=$_POST['password'];
$login=$servidor->query("SELECT * FROM adminuser WHERE usuario='$usuario'")->fetch_assoc();
if ($contrasena==$login['clave']){
	session_start();
	$_SESSION['user_id'] = $login['id'];
	$_SESSION['user_name'] = utf8_encode($login['nombres']." ".$login['apellidos']);
	$_SESSION['tipo_user'] = $login['tipo'];
	$_SESSION['usuario'] = $login['usuario'];
	$_SESSION['contraseña'] = $login['clave'];

	if ($login['clave']=="1234") {
		header("location:clave.php?usuario=".$_SESSION['user_id']);
	}else {
		header("location:profesores.php");
	}
	die();
}else{
	header("location:index.php?acao=erro");
	die();
}
