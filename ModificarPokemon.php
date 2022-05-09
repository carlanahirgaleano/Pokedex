<?php
session_start();
include_once("ConexionDatabase.php");

$idPokemon = $_GET['Modificar'];
$db= new ConexionDatabase();

//Si apreta dar de baja entonces elimina pokemon
if (isset($_GET['Baja'])) {
    $db->eliminarPokemon(($_GET['Baja']));
    header('location:index.php');
}

$resultado = $db->buscarUnPokemon($idPokemon);

foreach ($resultado as $pokemon){
    $identificador = $pokemon['identificador'];
    $nombre = $pokemon['nombre'];
    $descripcion = $pokemon['descripcion'];
    $imagen = $pokemon['imagen'];

}

echo "
<html>
    <body>
    <form action='ModificarProceso.php/?idPokemon=$idPokemon' method='post' enctype='multipart/form-data'>
        
    <label for='nro'>Número #</label>
    <input type='number' name='identificador' id='nro' value='$identificador' required>
    <br>
    <br>
    <label for='nombre'>Nombre</label>
    <input type='text' name='nombre' id='nombre' value='$nombre' required>
    <br>
    <br>
    <p>Seleccionar el tipo</p>
        <select name='tipoNuevo' id='tipoNuevo'> 
            <option value='1'>Veneno</option>
            <option value='4'>Electrico</option>
            <option value='2'>Agua</option>
            <option value='3'>Planta</option>
        </select><br>
    <br>
    <label for='desc'>Descripción</label>
    <input type='text' name='descripcion' id='desc' value='$descripcion' required>
    <br>
    <br>
    <label for='img'>Seleccione la imagen del pokemon</label>
    <br>
    <br>
    <input type='file' name='imagen' id='img' required>
    <br>
    <br>
    <input type='submit' value='Modificar'>
    </form>  
    </body>
    <a href='index.php'>Atrás</a>
</html>
";