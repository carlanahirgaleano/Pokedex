<?php
include_once('html/header.html');
include_once('ConexionDatabase.php');

$input = $_POST["pokemon"];

$conexionDB = new ConexionDatabase();
$resultado = $conexionDB->buscarUnPokemon($input);

if($resultado->num_rows >= 1){
    include_once("html/TablaGeneralPokemon.html");
    foreach ($resultado as $pokemon){
        $identificador = $pokemon['identificador'];
        $nombre = $pokemon['nombre'];
        echo   "<tr>
                    <td><a href='DetallePokemon.php/?param=$identificador' > " . $identificador . "</a></td>
                <td><a href='DetallePokemon.php/?param=$nombre' > " . $nombre . "</a></td>
                    <td><img width='100px' height='50px' src='".$pokemon['tipoImagen']."'></td>
                    <td> <img width='50px' height='50px' src='".$pokemon['imagen']."'> </td>
                </tr>";
    }
    $conexionDB->cerrarConexion();
}else{
    $conexionDB->cerrarConexion();
    header('location:index.php');
};
echo "</table>";



