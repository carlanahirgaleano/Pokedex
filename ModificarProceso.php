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




echo "<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
              content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Modificá un Pokémon</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
          integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <link rel='stylesheet' href='../css/estilos.css'>
</head>
<header>
<img src='../img/logo.png' style='width: 200px'>
</header>
<body class='bg-dark'>

<div class='card w-50 h-100 m-auto pt-4 mt-4'>
<h3 class='text-center' >Editaste el siguiente pokemon: </h3>".
    "<div> <h3 class='text-center' >". $resultado->getNombre() . "</h3></div>
     <img  class='mx-auto d-block'  src=../" . $resultado->getimagen() ." width='40%'>". "<br>
     </div>" .
    "<a href='../index.php' class='btn btn-secondary ms-4 p-2 ps-5 pe-5 mt-3 mb-3 mx-auto'>Volver a Home</a>
     </body>
     </html>";
