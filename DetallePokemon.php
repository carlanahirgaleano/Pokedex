<html>
<div>
    Detalle de Pokemon
</div>
<?php
include_once('ConexionDatabase.php');
$parametro = $_GET['param'];

$conexionDB = new ConexionDatabase();
$resultado = $conexionDB->buscarUnPokemon($parametro);

foreach ($resultado as $pokemon) {
    echo "<div>" .$pokemon['nombre']."</div>";
    echo "<div>" .$pokemon['identificador']."</div>";
    echo "<div><img width='100px' height='50px' src='../".$pokemon['tipoimagen']."'></div>";
    echo "<div><img width='100px' height='50px' src='../".$pokemon['imagen']."'></div>";
    echo "<div>" .$pokemon['descripcion']."</div>";
}
$conexionDB->cerrarConexion();
?>
</html>