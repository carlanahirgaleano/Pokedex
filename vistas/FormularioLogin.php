<!DOCTYPE html>
<html lang="es">

<div class="row-fluid d-none d-sm-none d-md-none d-lg-flex justify-content-lg-around ">

<div class="col-lg-3 row">
<div class="logo-responsive">
            <img src="./img/logo.png" class="img-fluid mt-2" alt="">
        </div>
</div>
<div class="col-lg-4">
<h2 class="text-center mt-5 text-light ">POKEDEX</h2>
</div>
<div class="col-lg-3">

<form  class="form-signin formularioDesktop d-flex justify-content-between flex-lg-wrap" action='sesiones/login.php' method='post'>
                                   

        <input type="text" name="usuario" value="" class="form-control  m-auto mb-4 mt-4" placeholder="Usuario">
       
                                  
   
   <input type="password" name="clave" value="" class="form-control  m-auto mb-4 mt-4 ml-2"
                                           placeholder="Contraseña">
    

        
                                           <button type="submit" class="btn btn-lg btn-danger d-flex m-auto ">Ingresar al
                                       Sistema</button>
                                   <hr class="my-4 ">
                                   <?php
                                     if(isset($_SESSION['error'])) {
                                     echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                         }
                                      ?>                    
       
</form>


</div>


</div>



<div class="container logo d-lg-none">
            <img src="./img/logo.png" class="img-fluid mt-2" alt="">
        </div>
        <h2 class="text-center mt-5 text-light d-lg-none ">POKEDEX</h2>
        
            <div class="row d-flex m-auto d-lg-none  ">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto pb-1">
                    <div class="card card-signin my-5">
                        <div class="card-body mb-4">
                            <h3 class="card-title text-center pt-4">Iniciar Sesion</h3>
                            <form class="form-signin" action='sesiones/login.php' method='post'>
                                   
                                <div class="form-label-group">
                                    <input type="text" name="usuario" value="" class="form-control mb-4 mt-4"
                                        placeholder="Usuario">

                                </div>

                                <div class="form-label-group pb-4">
                                    <input type="password" name="clave" value="" class="form-control"
                                        placeholder="Contraseña">


                                </div>


                                <button type="submit" class="btn btn-lg btn-danger d-flex m-auto ">Ingresar al
                                    Sistema</button>
                                <hr class="my-4 ">
                                <?php
                                     if(isset($_SESSION['error'])) {
                                     echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                         }
                                      ?>
                            </form>
                        </div>


                      
                    </div>
                </div>
            </div>


</html>