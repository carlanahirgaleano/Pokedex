<?php
include_once('../ConexionDatabase.php');
include_once('SesionUsuario.php');

$usuario = $_POST["usuario"];
$password = $_POST["clave"];

$sesion = new SesionUsuario();
$conexionDB = new ConexionDatabase();
$resultado = $conexionDB->buscarUsuarioPassword($usuario,$password);

if($resultado->num_rows == 1){
    //Existe el usuario
    $conexionDB->cerrarConexion();
    $sesion->setCurrentUser($usuario);
    header('location: ../index.php');
}else {
    //No existe el usuario
    $conexionDB->cerrarConexion();
    $_SESSION['error'] = "<div class='text-light mt-3 ml-2'>¡Nombre de usuario y/o password incorrecto!</div>";
    header('location: ../index.php');
}


