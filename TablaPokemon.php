<?php
include_once('ConexionDatabase.php');
include_once("html/TablaGeneralPokemon.html");

$conexionDB = new ConexionDatabase();
$resultado = $conexionDB->devolverTodosLosPokemones();
foreach ($resultado as $pokemon) {
    $identificador = $pokemon['identificador'];
    $nombre = $pokemon['nombre'];

    echo "<tr>
                <td><a href='DetallePokemon.php/?param=$identificador' > " . $identificador . "</a></td>
                <td><a href='DetallePokemon.php/?param=$nombre' > " . $nombre . "</a></td>
                <td><img width='100px' height='50px' src='" . $pokemon['tipoimagen'] . "'></td>
                <td> <img width='50px' height='50px' src='" . $pokemon['imagen'] . "'> </td>
          </tr>";
}
echo "</table>";
$conexionDB->cerrarConexion();
