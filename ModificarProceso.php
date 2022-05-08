<?php
session_start();
//validar session
include_once("Pokemon.php");
include_once("ConexionDatabase.php");
$db= new ConexionDatabase();

$idPokemon=$_GET['idPokemon'];

$identificadorNuevo=$_POST["identificador"];
$nombreNuevo=$_POST['nombre'];
$descripcionNueva=$_POST['descripcion'];
$tipoNuevo=$_POST["tipoNuevo"];
$imagenNueva = 'img/' . $_FILES["imagen"]["name"];

    //Muevo la imagen cargada a directorio img
    $rutaArchivoTemporal = $_FILES["imagen"]["tmp_name"];
    $rutaArchivoFinal = $imagenNueva;

    move_uploaded_file($rutaArchivoTemporal, $rutaArchivoFinal);


$pokemon = new Pokemon($identificadorNuevo,$nombreNuevo, $imagenNueva, $tipoNuevo,$descripcionNueva);

$resultado=$db->editarPokemon($pokemon,$idPokemon);

echo "<h2>Editaste el siguiente pokemon: </h2>".
    "<div> <h3>". $resultado->getNombre() . "</h3></div>
     <img src=../" . $resultado->getimagen() ." width='20%'>". "<br>" .
    "<a href='../index.php'>Volver a Home</a>";

