<?php
session_start();
include_once ("ConexionDatabase.php");

$idPokemon =$_GET['idPokemon'];

$db= new ConexionDatabase();

$resultado=$db->buscarUnPokemonPorId($idPokemon);
//var_dump($resultado->fetch_assoc());

echo "
    

<html>
    <body>
    <form action='/?idPokemon=$idPokemon/ModificarProceso.php' method='post' enctype='multipart/form-data'>

          <input type='hidden' name='$idPokemon' value=$idPokemon>

         <label for='identificador'>Numero</label> <br>
         <input type='text' name='identificador'> <br>

        <label for='nombre'>Nombre</label> <br>
        <input type='text' name='nombre'><br>

        <label for='descripcion'>Descrpicion</label><br>
        <input type='text' name='descripcion'> <br>
        
         <label for='tipoNuevo'>Tipo de Pokemon</label> <br>
         <select name='tipoNuevo' id='tipoNuevo'> 
            <option value='Veneno'>Veneno</option>
            <option value='Electrico'>Electrico</option>
            <option value='Agua'>Agua</option>
        </select><br>
        <input type='file' name='imagenPokemon'> <br>
        <input type='submit' name='campos-actualizados' value='Actualizar'>
    </form>
    </body>


</html>
";