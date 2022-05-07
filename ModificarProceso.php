<?php
session_start();
//validar session
include_once ("ConexionDatabase.php");
$db= new ConexionDatabase();

$idPokemon=$_POST["idPokemon"];
$identificadorNuevo=$_POST["identificador"];
$nombreNuevo=$_POST['nombre'];
$descripcionNueva=$_POST['descripcion'];
// $imagenNueva=$_FILES['imagenPokemon'];
$tipoNuevo=$_POST["tipoNuevo"];



$resultado=$db->editarPokemon($identificadorNuevo,$descripcionNueva,$nombreNuevo,$tipoNuevo,$idPokemon);

