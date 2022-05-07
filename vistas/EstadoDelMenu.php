<?php
if(isset($_SESSION['usuario'])){
    // Si la sesion esta activa entonces
    echo "<tr>
                <td><a href='DetallePokemon.php/?param=$identificador' > " . $identificador . "</a></td>
                <td><a href='DetallePokemon.php/?param=$nombre' > " . $nombre . "</a></td>
                <td><img width='100px' height='50px' src='" . $pokemon['tipoImagen'] . "'></td>
                <td> <img width='50px' height='50px' src='" . $pokemon['imagen'] . "'> </td>
                <form action='' method='POST' enctype='text/plaine'>
             <!--  <td> <button type='submit' class='button' name='enviar'>Modificacion</button> </td>-->
                <td><a href='ModificarPokemon.php/?idPokemon=$id'>Modificar </a> </td>
                <td> <button type='submit' class='button' name='Baja' value='$identificador'>Baja</button> </td>
                </form>               
          </tr>";
}else {
    // Si la sesion esta inactiva entonces
    echo "<tr>
                <td><a href='DetallePokemon.php/?param=$identificador' > " . $identificador . "</a></td>
                <td><a href='DetallePokemon.php/?param=$nombre' > " . $nombre . "</a></td>
                <td><img width='100px' height='50px' src='" . $pokemon['tipoImagen'] . "'></td>
                <td> <img width='50px' height='50px' src='" . $pokemon['imagen'] . "'> </td>
          </tr>";
}