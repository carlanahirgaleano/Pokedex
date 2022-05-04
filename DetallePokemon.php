<html>
<div>
    Detalle de Pokemon
</div>
<?php


$parametro = $_GET['param'];

//BuscarUnPokemon
$config = parse_ini_file("config.ini");

$conexion = new mysqli($config["host"],$config["usuario"],$config["clave"],$config["base"]);



$sql = "SELECT * FROM Pokemon WHERE nombre = ? OR identificador = ?";

$comando = $conexion->prepare($sql);
$comando->bind_param("si", $parametro , $parametro);

$comando->execute();

$resultado = $comando->get_result();

foreach ($resultado as $pokemon ) {
    echo  "<div>" .$pokemon['nombre']."</div>";
    echo "<div>" .$pokemon['identificador']."</div>";
     echo "<div><img width='100px' height='50px' src='".$pokemon['imagen']."'></div>";
   echo "<div><img width='100px' height='50px' src='".$pokemon['imagen']."'></div>";
    echo "<div>" .$pokemon['descripcion']."</div>";

}


?>
</html>