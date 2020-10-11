<?php
include_once 'plantillas/plantilla.php';

include_once 'plantillas/cuerpo/inihtmlN2.php';
include_once 'plantillas/nav/navN2.php';
include_once '../controlador/controladorsession.php';
include_once '../controlador/controlador.php';

cardtitulo('Mis datos');

?>



















<div class=" mx-auto col-md-5 mb-5">
    <div class="container">
        <div class="row">


            <div class="col-md-6 card card-body shadon mx-auto border-left-primary shadow h-100 py-2 mb-5">
                <div class="card-header shadow">
                    <h4 class="text-center   my-2"><em class="">Cambion de contraseña</em></h4>
                </div>
                <form action="../metodos/post.php" method="POST">

                    <div class="row">
                        <div class=" shadow h-100 py-2 mb-4 card card-body">
                            <h5 class="text-center mx-auto">Contraseña anterior </h5>
                            <div class="form-group"><input class="form-control" type="password" name="passA" value="" required autofocus maxlength="20"></div>
                            <h5 class="text-center mx-auto">Nueva contraseña </h5>
                            <div class="form-group"><input class="form-control" type="password" name="passN" value="" required autofocus maxlength="20"></div>
                            <h5 class="text-center mx-auto">Repita contraseña </h5>
                            <div class="form-group"><input class="form-control" type="password" name="passN2" value="" required autofocus maxlength="20"></div>
                            <input type="hidden" name="accion" value="cambioContrasena">
                            <input type="submit" name="submit" class="btn btn-primary btn-block" value="cambiar">  
                            
                            





                            <?php

                    if (isset($_SESSION['message'])) {
?>
    <!-- alerta boostrap -->
    <div class="col-md-12 mx-auto my-2 alert alert-<?php echo $_SESSION['color']   ?> alert-dismissible fade show" role="alert">
        <?php
                        echo  $_SESSION['message']  ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
                        setMessage();
                    }

?>

                        </div>
                </form>

                


            </div>
        </div>
    </div>
</div>
</div>
<br>





<?php
include_once  'plantillas/cuerpo/finhtml.php';
?>