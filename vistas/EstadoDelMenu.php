<?php
if(isset($_SESSION['usuario'])){
    // Si la sesion esta activa entonces
    echo "<tr>
                <td><a href='DetallePokemon.php/?param=$identificador' > " . $identificador . "</a></td>
                <td><a href='DetallePokemon.php/?param=$nombre' > " . $nombre . "</a></td>
                <td><img width='80px' src='" . $pokemon['imagenTipo'] . "'></td>
                <td> <img width='65px'  src='" . $pokemon['imagen'] . "'> </td>
                <form action='' method='POST' enctype='text/plaine'>
                <td> <button type='submit' class='button' name='enviar'>Modificacion</button> </td>
                <td> <button type='submit' class='button' name='Baja' value='$identificador'>Baja</button> </td>
                </form>               
          </tr>";
}else {
    // Si la sesion esta inactiva entonces
    echo "<tr>
                <td><a href='DetallePokemon.php/?param=$identificador' > " . $identificador . "</a></td>
                <td><a href='DetallePokemon.php/?param=$nombre' > " . $nombre . "</a></td>
                <td><img width='80px' src='" . $pokemon['imagenTipo'] . "'></td>
                <td> <img width='65px'  src='" . $pokemon['imagen'] . "'> </td>
          </tr>";
}