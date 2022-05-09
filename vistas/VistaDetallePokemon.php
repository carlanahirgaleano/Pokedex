<?php

echo "
<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
              content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Modificá un Pokémon</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
          integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <link rel='stylesheet' href='../css/estilos.css'>
</head>
<header>
<img src='../img/logo.png' style='width: 200px'>
</header>
<body class='bg-dark'>
<div class='card mb-3 center mx-auto d-block' style='max-width: 540px;'>
  <div class='row g-0'>
    <div class='col-md-4'>
      <img width='200%' class='img-fluid rounded-start' src='../".$pokemon['imagen']."'>
    </div>
    <div class='col-md-8'>
      <div class='card-body'>
        <div>" .$pokemon['nombre']. "</div>
         <div>" .$pokemon['identificador']. "</div>
        <div><img width='100px' src='../".$pokemon['imagenTipo']."'></div>
            <div></div>
            <div class='card-text'>" .$pokemon['descripcion']."</div>
      </div>
    </div>
  </div>
</div>
<a href='../index.php' class='btn btn-secondary ms-4 p-2 ps-5 pe-5 mt-3 mb-3 mx-auto'>Volver a Home</a>
</body>
</html>";

