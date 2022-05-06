<?php
include_once('ConexionDatabase.php');

$conexionDB = new ConexionDatabase();
$resultado = $conexionDB->devolverTodosLosPokemones();

foreach ($resultado as $pokemon){
    $identificador = $pokemon['identificador'];
    $nombre = $pokemon['nombre'];
    include("vistas/EstadoDelMenu.php");
}
echo "</table>";
$conexionDB->cerrarConexion();
