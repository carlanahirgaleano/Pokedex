
<html>
<?php
include_once('header.php');
?>

             <?php
             include_once('ConexionDatabase.php');
             $conexionDB = new ConexionDatabase();
             $resultado = $conexionDB->devolverTodosLosPokemones();
             include_once('TablaPokemon.php');
             ?>
</table>
</div>


</html>