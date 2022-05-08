<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokedex</title>
</head>
<body>
<header>
    <?php
    session_start();
    if(isset($_SESSION['usuario'])){
        echo"<p>Usuario " . ($_SESSION['usuario']) ."</p>
             <a href='sesiones/logoutSesion.php'>Cerrar sesión</a>";
    }else {
        include_once('FormularioLogin.php');
    }
    ?>

    <form action='BuscarPokemon.php' method='POST' enctype='text/plaine'>
        <input type='text'
               id='pokemon'
               name='pokemon'
               placeholder='Ingrese nombre, tipo o número de pókemon'>
        <button type="submit" name="enviar">Buscar</button>
    </form>

    <?php
    if(isset($_SESSION['usuario'])){
        echo "<a href='./vistas/VistaCrearPokemon.php'>Crear nuevo pokemon</a>";
    }
    ?>

</header>
<h2>Pokemones</h2>
<table class='w3-table'>

    <tr>
        <th>Identificador</th>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Imagen</th>

        <?php if(isset($_SESSION['usuario'])){
            echo "<th>Acciones</th>";
        }
        ?>
    </tr>

</body>
</html>
