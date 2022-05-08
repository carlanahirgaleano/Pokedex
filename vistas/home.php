<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pokedex</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/estilos.css">

</head>
<body class="bg-dark">
<header>
    <?php
    session_start();
    if(isset($_SESSION['usuario'])){
        echo"
        <div class='container'></div>
        <div class='container mb-5 mt-5 d-flex flex-nowrap justify-content-end'>
        <p class='text-light'>Usuario " . ($_SESSION['usuario']) ."</p>
      
        <a class='btn btn-danger ml-2'href='sesiones/logoutSesion.php'>Cerrar sesión</a>
  
             </div>
                 
             "
             ;
    }else {
        include_once('FormularioLogin.php');
    }
    ?>

  
</header>
<h2 class="text-light text-center">Pokemones</h2>

<table class='table table-light m-auto tablaPokemon '>

<thead>
    <tr>
      <th scope="col">Identificador</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo</th>
      <th scope="col">Imagen</th>
      <?php if(isset($_SESSION['usuario'])){
            echo "<th>Acciones</th>";
        }
        ?>
    </tr>
  </thead>





  
    <div class="container pt-2 pb-3 d-flex justify-content-center flex-nowrap">
    <form action='BuscarPokemon.php' method='POST' enctype='text/plaine'>
      <input class="form-control buscador ml-auto " type="search" id='pokemon'
               name='pokemon' placeholder="Ingrese nombre, tipo o numero de Pokemon" aria-label="Search">
               <button class="btn btn-outline-danger bg-danger text-light botonBuscar " type="submit">Buscar</button>
    
     
               
    </form>
    
  </div>
  <?php
    if(isset($_SESSION['usuario'])){
        echo "<button type='submit'  class='btn btn-success d-flex m-auto mt-2 mb-3 ' name='enviar'>Agregar nuevo pokemon</button>";
    }
    ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
