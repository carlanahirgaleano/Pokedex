<html>
<?php
include_once('header.php');
include_once('ConexionDatabase.php');
//BuscarUnPokemon

$input = $_POST["pokemon"];

$conexionDB = new ConexionDatabase();
$resultado = $conexionDB->buscarUnPokemon($input);


if($resultado->num_rows == 1){
    include_once("TablaPokemon.php");

}else{
    echo "<div>Pokemon no encontrado</div>";
    header('location:index.php');
};?>
        </table>
    </div>
</html>


