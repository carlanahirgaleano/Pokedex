<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pokedex</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/estilos.css">

</head>
<body class="bg-dark">

<div class="d-flex" >
    <div>
        <a class="btn btn-secondary m-3 " href='../index.php' role="button">Volver</a>
    </div>
    <div class="col-lg-3 row ">
        <div class='logo-responsive'>
            <img src='../img/logo.png' class='img-fluid mt-2'>
        </div>
    </div>

    <div class="col-lg-4">
        <h2 class="text-center  text-light mt-5 ">POKEDEX</h2>

</div>

</div>

</body>

<?php

echo " <html>
 
       <div class='container'>
  <div class='row'>
    <div class='col-lg '>
       <img  src='../".$pokemon['imagen']."' class='img-fluid '>
    </div>
    <div class='col-lg '>
       <div class='container'>
           <div class='row  row-cols-3 mt-5 mb-5'>
           <div class='col p-10'><img width='100px'  src='../".$pokemon['imagenTipo']."'></div>
           <div class='col text-light mt-2' >" .$pokemon['identificador']. "</div>
           <div class='col text-light p-10 mt-2'>" .$pokemon['nombre']. "</div>
          
        
        </div>
    
              <div class='text-light'>" .$pokemon['descripcion']."</div>
    </div>
    
       </div>
    </div>
      </div>
 </html>";













