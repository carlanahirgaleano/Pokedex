<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body class="bg-dark">
<?php

include_once("Pokemon.php");
include_once("ConexionDatabase.php");

$conexionDB = new ConexionDatabase();

$imagen = 'img/' . $_FILES["imagen"]["name"];



//Verifico si existe el Pokemon
$existePokemon = $conexionDB->existePokemon($_POST["identificador"], strtolower($_POST["nombre"]));

if ($existePokemon) {
    echo "<h2 class='text-center mt-4 mb-4 pt-4 text-white'>Ha ocurrido un error!</h2><p class='text-center pt-4 text-white fs-5'>El nombre o número de Pokémon ya está en uso. Elija uno nuevo</p>".
        "<div class='w-25 m-auto mt-5'><a href='./vistas/VistaCrearPokemon.php' class='btn btn-secondary ms-4 p-2  mt-3 mb-3 mx-auto d-block'>Volver al formulario</a></div>";
}
else{
    //Muevo la imagen cargada a directorio img
    $rutaArchivoTemporal = $_FILES["imagen"]["tmp_name"];
    $rutaArchivoFinal = $imagen;

    move_uploaded_file($rutaArchivoTemporal, $rutaArchivoFinal);

    //Creo objeto pokemon
    $nuevoPokemon = new Pokemon($_POST["identificador"], $_POST["nombre"], $imagen, $_POST["tipo"], $_POST["descripcion"]);
    $pokemonCreado = $conexionDB->crearPokemon($nuevoPokemon);

    echo "<h2 class='text-center pt-4 text-white'>Bien hecho! Creaste un nuevo Pokémon</h2>".
        "<div class='w-75 m-auto'> <h3 class='text-center mt-5 text-white fs-2 text-uppercase'>". $pokemonCreado->getNombre() . "</h3></div>
                 <img  class='img-fluid d-block m-auto' src=".$pokemonCreado->getimagen() ." width='25%'>".
        "<div class='w-25 m-auto mt-5'><a href='index.php' class='btn btn-secondary  p-2 mt-3 mb-3 mx-auto d-block'>Volver a Home</a></div>";
}

?>

</body>
</html>l



