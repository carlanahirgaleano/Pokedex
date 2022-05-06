<?php
include_once('vistas/home.php');
include_once('ConexionDatabase.php');

$input = $_POST["pokemon"];

$conexionDB = new ConexionDatabase();
$resultado = $conexionDB->buscarUnPokemon($input);

if (isset($_POST['Baja'])) {
    $conexionDB->eliminarPokemon(($_POST['Baja']));
    header('location:index.php');
}

if($resultado->num_rows >= 1){
    foreach ($resultado as $pokemon) {
        $identificador = $pokemon['identificador'];
        $nombre = $pokemon['nombre'];
        include("vistas/EstadoDelMenu.php");
    }
    $conexionDB->cerrarConexion();
}else {
    $conexionDB->cerrarConexion();
    header('location:index.php');
}
echo "</table>";



