<?php
include_once('ConexionDatabase.php');

echo "<h2 class>Pokemones</h2>
         <table class='w3-table'>
             <tr>
                 <th>Identificador</th>
                 <th>Nombre</th>
                 <th>Tipo</th>
                 <th>Imagen</th>
             </tr>";

foreach ($resultado as $pokemon) {
    $identificador = $pokemon['identificador'];
    $nombre = $pokemon['nombre'];

    echo "
    

                    <tr>
                                <td><a href='DetallePokemon.php/?param=$identificador' > " . $identificador . "</a></td>
                                <td><a href='DetallePokemon.php/?param=$nombre' > " . $nombre . "</a></td>
                                <td><img width='100px' height='50px' src='/" . $pokemon['tipoImagen'] . "'></td>
                                <td> <img width='50px' height='50px' src='/" . $pokemon['imagen'] . "'> </td>
                            </tr>
                            
                            
        
                            
                            ";
}
?>