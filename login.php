<?php
include_once('ConexionDatabase.php');
$usuario = $_POST["usuario"];
$password = $_POST["clave"];

$conexionDB = new ConexionDatabase();
$resultado = $conexionDB->buscarUsuarioPassword($usuario,$password);

if($resultado->num_rows == 1){
    $conexionDB->cerrarConexion();
    header('location: index.php');
}else{
    $conexionDB->cerrarConexion();
    echo 'Usuario y/o contraseña incorrectos';
    header('location: index.php');

}

