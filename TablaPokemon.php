<?php
include_once('ConexionDatabase.php');

$conexionDB = new ConexionDatabase();
$resultado = $conexionDB->devolverTodosLosPokemones();

if (isset($_POST['Baja'])) {
    $conexionDB->eliminarPokemon(($_POST['Baja']));
    header('location:index.php');
}

foreach ($resultado as $pokemon){
    $identificador = $pokemon['identificador'];
    $nombre = $pokemon['nombre'];
    $id=$pokemon['id'];
    include("vistas/EstadoDelMenu.php");
}
echo "</table>";
$conexionDB->cerrarConexion();
