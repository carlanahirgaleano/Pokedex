<html>
<div>
    Detalle de Pokemon
</div>
<?php
include_once('sesiones/SesionUsuario.php');
include_once('ConexionDatabase.php');
$parametro = $_GET['param'];

$sesionUser = new SesionUsuario();
$conexionDB = new ConexionDatabase();
$resultado = $conexionDB->buscarUnPokemon($parametro);

foreach ($resultado as $pokemon) {
    include_once("vistas/VistaDetallePokemon.php");
}
$conexionDB->cerrarConexion();
?>
</html>