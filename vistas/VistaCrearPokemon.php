<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creá un nuevo Pokémon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body class="bg-dark">

<h1 class="text-center pt-4 text-white">Creá un nuevo Pokémon<img src="../img/pokeball.png" alt="pokeball" style="width: 5%" class="ms-4"></h1>

<div class="card w-50 m-auto pt-4 mt-4 form-responsive">
    <form action="../CrearPokemon.php" method="post" enctype="multipart/form-data" >
        <p class="text-center ms-3 me-3">Completá las características que va a tener el nuevo Pokémon. Luego, guardá los cambios para incluirlo en la Primera Generación.</p>

        <div class="card-body w-75 m-auto form-responsive">
            <label for="nro" class="pe-5">Número </label>
            <input type="number" name="identificador" id="nro" class="w-75" required>
            <br>
            <br>
            <label for="nombre" class="pe-5" >Nombre</label>
            <input type="text" name="nombre" id="nombre" class="w-75" required>
            <br>
            <br>
            <p class="pt-2">Seleccionar el tipo:</p>
            <div class="input-radio d-flex">
                <div>
                    <input type="radio" name="tipo" id="tipo" value="1" required>
                    <label for="tipo" class="ms-2 me-3">Veneno</label>
                </div>
                <div>
                    <input type="radio" name="tipo" id="tipo" value="2" required>
                    <label for="tipo" class="ms-2 me-3">Agua</label>
                </div>
                <div>
                    <input type="radio" name="tipo" id="tipo" value="3" required>
                    <label for="tipo" class="ms-2 me-3">Planta</label>
                </div>
                <div>
                    <input type="radio" name="tipo" id="tipo" value="4" required>
                    <label for="tipo" class="ms-2 me-3">Eléctrico</label>
                </div>
                <div>
                    <input type="radio" name="tipo" id="tipo" value="5" required>
                    <label for="tipo" class="ms-2 me-3">Fuego</label>
                </div>
                <div>
                    <input type="radio" name="tipo" id="tipo" value="6" required>
                    <label for="tipo" class="ms-2 me-3">Hada</label>
                </div>
            </div>
            <br>
            <label for="desc" class="pe-4 pt-2">Descripción</label>
            <input type="text" name="descripcion" id="desc" class="w-75 mt-2" required>
            <br>
            <br>
            <div class="d-flex w-100 carga-archivo">
                <label for="img" class="pt-2 pe-4">Cargar imagen del Pokémon</label>
                <input type="file" name="imagen" id="img" class="pt-2 pb-2" required>
            </div>

            <input type="submit" value="Guardar Pokemon" class='btn btn-success mt-4 mb-3 m-auto d-flex pe-5 ps-5 guardar-pok'>

        </div>
    </form>
</div>
<a href="../index.php" class="btn btn-secondary ms-4 p-2 ps-5 pe-5 mt-3 mb-3 mx-auto">Atrás</a>

</body>
</html>
