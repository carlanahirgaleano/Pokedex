<html>
<?php
include_once('header.php');
?>
    <div>
        <h2 class>Pokemones</h2>
        <table class="w3-table">
            <tr>
                <th>Identificador</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Imagen</th>
            </tr>

<?php
//BuscarUnPokemon
$config = parse_ini_file("config.ini");

$conexion = new mysqli($config["host"],$config["usuario"],$config["clave"],$config["base"]);
$input = $_POST["pokemon"];


$sql = "SELECT * FROM Pokemon WHERE nombre = ? OR  tipo= ? OR identificador = ?";

$comando = $conexion->prepare($sql);
$comando->bind_param("ssi", $input , $input , $input);

$comando->execute();

$resultado = $comando->get_result();
if($resultado->num_rows == 1){
    foreach ($resultado as $pokemon ){
        echo   "<tr>
                                <td>" . $pokemon['identificador'] . "</td>
                                <td>" . $pokemon['nombre'] . "</td>
                                <td><img width='100px' height='50px' src='".$pokemon['tipoImagen']."'></td>
                                <td> <img width='50px' height='50px' src='".$pokemon['imagen']."'> </td>
                            </tr>";
    }

}else{
    echo "<div>Pokemon no encontrado</div>";
    header('location:index.php');
};?>
        </table>
    </div>
</html>


