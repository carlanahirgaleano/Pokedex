<?php
include_once('login.html');
?>
<html>
<div>Bienvenido<div/>
    <form action='./BuscarPokemon.php' method='POST' enctype='text/plaine'>
        <input type='text'
               id='pokemon'
               name='pokemon'
               placeholder='Ingrese nombre, tipo o número de pókemon'>
        <button type="submit" name="enviar">Buscar</button>
    </form>
</html>