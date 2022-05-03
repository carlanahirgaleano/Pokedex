<?php
$usuario = $_POST["usuario"];
$password = $_POST["clave"];

$config = parse_ini_file("config.ini");

$conexion = new mysqli($config["host"],$config["usuario"],$config["clave"],$config["base"]);

$sql = "SELECT * FROM credenciales WHERE email = ? AND password = ?";

$comando = $conexion->prepare($sql);
$password = md5($password);

$comando->bind_param("ss",$usuario,$password);
$comando->execute();
$resultado = $comando->get_result();
$fila = $resultado->fetch_assoc();


if($resultado->num_rows == 1){
    header('location: index.php');
}else{
    header('location: login.html');
    echo 'Usuario y/o contraseña incorrectos';
}

