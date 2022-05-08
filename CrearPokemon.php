<?php

include_once ("Pokemon.php");
include_once ("ConexionDatabase.php");

//Muevo la imagen cargada a directorio img
$rutaArchivoTemporal = $_FILES["imagen"]["tmp_name"];
$rutaArchivoFinal = "img/" . $_FILES["imagen"]["name"];

move_uploaded_file($rutaArchivoTemporal, $rutaArchivoFinal);


$imagen = 'img/' . $_FILES["imagen"]["name"];


//Creo objeto pokemon
$nuevoPokemon = new Pokemon($_POST["identificador"], $_POST["nombre"], $imagen, $_POST["tipo"], $_POST["descripcion"]);

$conexionDB = new ConexionDatabase();

$pokemonCreado = $conexionDB->crearPokemon($nuevoPokemon);



echo "<h2>Bien hecho! Creaste un nuevo Pokémon</h2>".
     "<div> <h3>". $pokemonCreado->getNombre() . "</h3></div>
       <img src=".$pokemonCreado->getimagen() ." width='20%'>".
        "<a href='index.php'>Volver a Home</a>";

