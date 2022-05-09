<?php

include_once('ConexionDatabase.php');

$input = $_POST["pokemon"];

$conexionDB = new ConexionDatabase();
$resultado = $conexionDB->buscarUnPokemon($input);

if($resultado->num_rows >= 1){
    foreach ($resultado as $pokemon) {
        $identificador = $pokemon['identificador'];
        $nombre = $pokemon['nombre'];
        include_once('vistas/home.php');
        include("vistas/EstadoDelMenu.php");
    }
    $conexionDB->cerrarConexion();
}else {
    $conexionDB->cerrarConexion();
    session_start();
    $_SESSION['errorBusqueda'] = "<div class='text-light mt-3 ml-2 text-center'>Pokemon no encontrado</div>";
    header('location: index.php');
}
echo "</table>";



