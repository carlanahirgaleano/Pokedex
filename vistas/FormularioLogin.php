<html>
    <form action='sesiones/login.php' method='post'>
        <?php
        if(isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
        ?>
        <h2>Iniciar sesión</h2>
        <input type='text' name='usuario' value=''><br>
        <input type='password' name='clave' value=''><br>
        <input type='submit'>
    </form>
</html>