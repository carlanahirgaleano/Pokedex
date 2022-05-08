<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creá un nuevo Pokémon</title>
</head>
<body>

<h1>Creá un nuevo Pokémon</h1>
<img src="../img/pokeball.png" alt="pokeball" style="width: 8%">

<p>Completá las características que va a tener el nuevo Pokémon. Luego, guardá los cambios para incluirlo en la Primera Generación.</p>

<form action="../CrearPokemon.php" method="post" enctype="multipart/form-data">
    <label for="nro">Número #</label>
    <input type="number" name="identificador" id="nro" required>
    <br>
    <br>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <br>
    <p>Seleccionar el tipo</p>
    <input type="radio" name="tipo" id="tipo" value="1" required>
    <label for="tipo">Veneno</label>
    <input type="radio" name="tipo" id="tipo" value="2" required>
    <label for="tipo">Agua</label>
    <input type="radio" name="tipo" id="tipo" value="3" required>
    <label for="tipo">Planta</label>
    <input type="radio" name="tipo" id="tipo" value="4" required>
    <label for="tipo">Eléctrico</label>
    <br>
    <br>
    <label for="desc">Descripción</label>
    <input type="text" name="descripcion" id="desc" required>
    <br>
    <br>
    <label for="img">Cargar imagen del Pokémon</label>
    <input type="file" name="imagen" id="img" required>
    <br>
    <br>
    <input type="submit" value="Guardar Pokemon">
</form>

<a href="../index.php">Atrás</a>

</body>
</html>

