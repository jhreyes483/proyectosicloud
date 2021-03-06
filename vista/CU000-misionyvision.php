<?php
include_once '../controlador/controladorrutas.php';
rutFromIni();
?>

<div class="col-md-12 mt-5">
    <div class="row">
        <div class="col-md-12 text-center text-white">
        <?php cardAviso() ?>
            <hr class="border" />
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10 mx-auto">
            <div id="carousel-1" class="carousel slide  " data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="fonts/slideprod0.jpg" alt="First slide" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="fonts/slideprod1.jpg" alt="Second slide" >
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> 
            </div>
        </div>
    </div>
</div><hr class="border" />


<div class="col-md-11 shadow p-3 mb-5 bg-white rounded card card-body my-5 mx-auto">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Tweedy_and_Popp_03.jpg/1200px-Tweedy_and_Popp_03.jpg" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">MISION</h5>
                <p class="card-text">En IMCOABHER Somos una Empresa dedicada a la comercialización de materiales para la construcción y afines como son el hierro figurado, 
                    herramientas y todo lo relacionado con el ramo de ferretería. 
                    Nos distinguimos por trabajar con personal calificado e infraestructura adecuada 
                    que nos permite a través de la implementación y desarrollo de procesos de calidad, 
                    satisfacer las necesidades de bienes y servicios de nuestros clientes, 
                    fomentando a través del empleo el desarrollo comercial y empresarial.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>

<div class="col-md-11 shadow p-3 mb-5 bg-white rounded card card-body my-5 mx-auto">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="https://tytenlinea.com/wp-content/uploads/2018/08/lagar20-800x445.jpg" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">VISION</h5>
                <p class="card-text">Para el 2022 en IMCOABHER, 
                        queremos posicionarnos como una ferretería competitiva en la capital del pais, 
                        por medio de personal capacitado y la estandarización de los procesos.
                        Ser reconocidos como distribuidores y detallistas líderes en proveer soluciones completas 
                        en materiales de ferretería, productos de línea industrial y semi-industrial cuya 
                        atención al cliente brinda un portafolio de servicios  complementarios y de calidad 
                        creando valor económico a través de la búsqueda de la excelencia y su expansión en el mercado 
                        Colombiano.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="map-responsive">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.92411032952!2d-74.20988058573687!3d4.607607443741915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9e22e1a69dad%3A0x37ca3bcc91bfba65!2sCl.%2078%20Sur%20%2378-71%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1590105646415!5m2!1ses!2sco" width="900" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</div>

<?php 
rutFinFooterFrom();
rutFromFin();
?>