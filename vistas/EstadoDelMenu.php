<?php
if(isset($_SESSION['usuario'])){
    // Si la sesion esta activa entonces
    echo "<tr>
                <td><a href='DetallePokemon.php/?param=$identificador' style='text-decoration: none'> " . $identificador . "</a></td>
                <td><a href='DetallePokemon.php/?param=$nombre' style='text-decoration: none'> " . $nombre . "</a></td>
                <td><img width='80px' src='" . $pokemon['imagenTipo'] . "'></td>
                <td> <img width='65px'  src='" . $pokemon['imagen'] . "'> </td>
                <form action='' method='POST' enctype='text/plaine'>
                <td> <button type='submit' class='button btn btn-warning text-light' name='enviar'>Modificacion</button> 
                <button type='submit' class='button btn btn-danger mt-2  mt-sm-0  ' name='Baja' value='$identificador'>Baja</button>
                </td>
              
                </form>               
          </tr>";
}else {
    // Si la sesion esta inactiva entonces
    echo "<tr>
                <td><a href='DetallePokemon.php/?param=$identificador' style='text-decoration: none'> " . $identificador . "</a></td>
                <td><a href='DetallePokemon.php/?param=$nombre' style='text-decoration: none'> " . $nombre . "</a></td>
                <td><img width='80px' src='" . $pokemon['imagenTipo'] . "'></td>
                <td> <img width='65px'  src='" . $pokemon['imagen'] . "'> </td>
          </tr>";
}