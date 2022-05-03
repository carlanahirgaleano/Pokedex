



<html>
<?php
include_once('header.php');
?>
         <h2 class>Pokemones</h2>
         <table class="w3-table">
             <tr>
                 <th>Identificador</th>
                 <th>Nombre</th>
                 <th>Tipo</th>
                 <th>Imagen</th>
             </tr>


             <?php
             $config = parse_ini_file("config.ini");

             $conexion = new mysqli($config["host"], $config["usuario"], $config["clave"], $config["base"]);

             $sql = "SELECT identificador, nombre, tipoImagen, imagen FROM Pokemon";

             $comando = $conexion->prepare($sql);
             $comando->execute();
             $resultado = $comando->get_result();

             foreach ($resultado as $pokemon ){
                 $identificador = $pokemon['identificador'];
                 $nombre= $pokemon['nombre'];

                 echo   "<tr>
                                <td><a href='DetallePokemon.php/?param=$identificador' > ".$identificador. "</a></td>
                                <td><a href='DetallePokemon.php/?param=$nombre' > " .$nombre. "</a></td>
                                <td><img width='100px' height='50px' src='".$pokemon['tipoImagen']."'></td>
                                <td> <img width='50px' height='50px' src='".$pokemon['imagen']."'> </td>
                            </tr>";
             }
             ?>
         </table>
     </div>
</html>