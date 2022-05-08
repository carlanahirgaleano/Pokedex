<?php

include_once("Pokemon.php");
include_once("ConexionDatabase.php");

$conexionDB = new ConexionDatabase();

$imagen = 'img/' . $_FILES["imagen"]["name"];



//Verifico si existe el Pokemon
$existePokemon = $conexionDB->existePokemon($_POST["identificador"], strtolower($_POST["nombre"]));

if ($existePokemon) {
    echo "<h2>Ha ocurrido un error!</h2><p>El nombre o número de Pokémon ya está en uso. Elija uno nuevo</p>".
        "<a href='vistas/VistaCrearPokemon.php'>Volver al formulario</a>";
}
else{
    //Muevo la imagen cargada a directorio img
    $rutaArchivoTemporal = $_FILES["imagen"]["tmp_name"];
    $rutaArchivoFinal = $imagen;

    move_uploaded_file($rutaArchivoTemporal, $rutaArchivoFinal);

    //Creo objeto pokemon
    $nuevoPokemon = new Pokemon($_POST["identificador"], $_POST["nombre"], $imagen, $_POST["tipo"], $_POST["descripcion"]);
    $pokemonCreado = $conexionDB->crearPokemon($nuevoPokemon);

    echo "<h2>Bien hecho! Creaste un nuevo Pokémon</h2>".
        "<div> <h3>". $pokemonCreado->getNombre() . "</h3></div>
                 <img src=".$pokemonCreado->getimagen() ." width='20%'>".
        "<a href='index.php'>Volver a Home</a>";
}



