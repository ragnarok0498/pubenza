<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'SedesSantoDomingo';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>

<div class="container">
    <div class="col-md-12">
        <div id="carousel-1" class="carousel slide" data-ride="carousel">
            <!--  indicadores  -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
                <li data-target="#carousel-1" data-slide-to="3"></li>
                <li data-target="#carousel-1" data-slide-to="4"></li>
                <li data-target="#carousel-1" data-slide-to="5"></li>
                <li data-target="#carousel-1" data-slide-to="6"></li>
                <li data-target="#carousel-1" data-slide-to="7"></li>
                <li data-target="#carousel-1" data-slide-to="8"></li>
            </ol>

            <!--  contenedor   -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/sdomingo 1.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b> INSTALACIONES SEDE SANTO DOMINGO</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/sdomingo 2.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE SANTO DOMINGO </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/sdomingo 3.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE SANTO DOMINGO </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/sdomingo 4.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE SANTO DOMINGO</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/sdomingo 5.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE SANTO DOMINGO </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/sdomingo 7.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE SANTO DOMINGO </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/sdomingo 10.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE SANTO DOMINGO </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/sdomingo 11.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE SANTO DOMINGO </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/sdomingo 12.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE SANTO DOMINGO </b></h2>
                    </div>
                </div>
            </div>
            <!-- controles  -->
            <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right " aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row5">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3>
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Sede Santo Domingo   
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="acr">
                        <div class="col-lg-4">
                            <img  class="center-block"  src="images/ehumano.png" class="img-responsive"  width="58" height="58">
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="ht">Equipo Humano</h2>
                                <p class="accor" class="text-justify">
                                    <b>Se cuenta con 7 docentes:</b><br><br>
                                    José Arburio Barragán Salguero, Lilia López Fonseca, José Holdan Piza Bernal, Jenny Carolina Artunduaga Bermúdez, Nubia Díaz Quimbayo, Lida Yohana Ramírez, July Parrada.
                                </p>
                            </li>
                        </div>
                        <div class="col-lg-4">
                            <img class="center-block" src="images/instalaciones.png" class="img-responsive" width="58" height="58">
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="ht">Instalaciones</h2>
                                <p class="accor" class="text-justify">
                                    Hay 13 salones de clase los cuales estan adaptados para la educacion secundaria mas el bachiller. <br>
                                    Un salon de sistemas, mas una cordinacion hay dos escenarios deportivos.
                                </p>
                            </li>
                        </div>
                        <div class="col-lg-4">
                            <img class="center-block" src="images/horarios.png" class="img-responsive"  width="58" height="58">
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="ht">Horarios</h2>
                                <p class="accor" class="text-justify">
                                    Educacion basica primaria, secundaria y bachiller: <br>
                                    Lunes a Viernes de 7:00 am - 1:00 pm
                                </p>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <br>
    <div class="col-md-12">
        <div id="carousel-2" class="carousel slide" data-ride="carousel">
            <!--  indicadores  -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-2" data-slide-to="1"></li>
                <li data-target="#carousel-2" data-slide-to="2"></li>
                <li data-target="#carousel-2" data-slide-to="3"></li>
                <li data-target="#carousel-2" data-slide-to="4"></li>
            </ol>

            <!--  contenedor   -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/recreo 2.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE RECREO </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/recreo 3.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE RECREO </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/recreo 7.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE RECREO </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/recreo 8.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE RECREO</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/recreo 9.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE RECREO </b></h2>
                    </div>
                </div>
            </div>
            <!-- controles  -->
            <a href="#carousel-2" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a href="#carousel-2" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right " aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row5">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Sede Recreo   </h3>
                </div>
                <div class="panel-body">
                    <ul class="acr">
                        <div class="col-lg-4">
                            <img  class="center-block"  src="images/ehumano.png" class="img-responsive"  width="58" height="58">
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="ht">Equipo Humano</h2>
                                <p class="accor" class="text-justify"> 
                                    <b>Docente:</b> Omar Orlando Urbano Sanabria
                                </p>
                            </li>
                        </div>
                        <div class="col-lg-4">
                            <img class="center-block" src="images/instalaciones.png" class="img-responsive" width="58" height="58">
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="ht">Instalaciones</h2>
                                <p class="accor" class="text-justify">
                                    Cuenta con tres salones de clase, un comedor infantil y una canche deportiva
                            </li>
                        </div>
                        <div class="col-lg-4">
                            <img class="center-block" src="images/horarios.png" class="img-responsive"  width="58" height="58">
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="ht">Horarios</h2>
                                <p class="accor" class="text-justify">
                                    Educacion basica primaria: <br>
                                    Lunes a Viernes de 7:00 am - 12:00 pm
                                </p>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <br>
    <div class="col-md-12">
        <div id="carousel-3" class="carousel slide" data-ride="carousel">
            <!--  indicadores  -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-3" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-3" data-slide-to="1"></li>
                <li data-target="#carousel-3" data-slide-to="2"></li>
                <li data-target="#carousel-3" data-slide-to="3"></li>
                <li data-target="#carousel-3" data-slide-to="4"></li>
                <li data-target="#carousel-3" data-slide-to="5"></li>
            </ol>

            <!--  contenedor   -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/mercedes 1.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LAS MERCEDES</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/mercedes 4.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LAS MERCEDES </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/mercedes 5.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LAS MERCEDES </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/mercedes 8.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LAS MERCEDES</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/mercedes 11.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LAS MERCEDES </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/mercedes 12.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LAS MERCEDES </b></h2>
                    </div>
                </div>
            </div>
            <!-- controles  -->
            <a href="#carousel-3" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a href="#carousel-3" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right " aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row5">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Sede Las Mercedes   </h3>
                </div>
                <div class="panel-body">
                    <ul class="acr">
                        <div class="col-lg-4">
                            <img  class="center-block"  src="images/ehumano.png" class="img-responsive"  width="58" height="58">
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="ht">Equipo Humano</h2>
                                <p class="accor" class="text-justify">
                                    <b>Docente:</b> Ángela Marcela Velásquez
                                </p>
                            </li>
                        </div>
                        <div class="col-lg-4">
                            <img class="center-block" src="images/instalaciones.png" class="img-responsive" width="58" height="58">
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="ht">Instalaciones</h2>
                                <p class="accor" class="text-justify">
                                    Cuenta con 4 aulas de clase, un aula de sistemas, una cancha deportiva, un comedor estudiantil y un parque donado por la CAR
                                </p>
                            </li>
                        </div>
                        <div class="col-lg-4">
                            <img class="center-block" src="images/horarios.png" class="img-responsive"  width="58" height="58">
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="ht">Horarios</h2>
                                <p class="accor" class="text-justify">
                                  Educacion basica primaria: <br>
                                    Lunes a Viernes de 7:00 am - 12:00 pm
                                </p>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <br>
    <div class="col-md-12">
        <div id="carousel-4" class="carousel slide" data-ride="carousel">
            <!--  indicadores  -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-4" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-4" data-slide-to="1"></li>
                <li data-target="#carousel-4" data-slide-to="2"></li>
                <li data-target="#carousel-4" data-slide-to="3"></li>
                <li data-target="#carousel-4" data-slide-to="4"></li>
                <li data-target="#carousel-4" data-slide-to="5"></li>
            </ol>

            <!--  contenedor   -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/palacio 1.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b> INSTALACIONES SEDE PALACIO</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/palacio 2.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE PALACIO</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/palacio 3.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE PALACIO</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/palacio 8.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE PALACIO</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/palacio 9.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE PALACIO </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/palacio 11.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE PALACIO </b></h2>
                    </div>
                </div>
            </div>
            <!-- controles  -->
            <a href="#carousel-4" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a href="#carousel-4" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right " aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row5">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Sede Palacios   </h3>
                </div>
                <div class="panel-body">
                    <ul class="acr">
                        <div class="col-lg-4">
                            <img  class="center-block"  src="images/ehumano.png" class="img-responsive"  width="58" height="58">
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="ht">Equipo Humano</h2>
                                <p class="accor" class="text-justify">
                                    <b>Docente:</b>Carlos Rubiel Rodríguez Rodríguez
                                </p>
                            </li>
                        </div>
                        <div class="col-lg-4">
                            <img class="center-block" src="images/instalaciones.png" class="img-responsive" width="58" height="58">
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="ht">Instalaciones</h2>
                                <p class="accor" class="text-justify">
                               Cuenta con cuatro aulas de clase y un aula de sistemas, una cancha deportiva y un comedor infantil tambien un miniparque ellos por los estudiantes 
                                </p>
                            </li>
                        </div>
                        <div class="col-lg-4">
                            <img class="center-block" src="images/horarios.png" class="img-responsive"  width="58" height="58">
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="ht">Horarios</h2>
                                <p class="accor" class="text-justify">
                                Educacion basica primaria: <br>
                                    Lunes a Viernes de 7:00 am - 12:00 pm  
                                </p>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <br>
    <div class="col-md-12">
        <div id="carousel-5" class="carousel slide" data-ride="carousel">
            <!--  indicadores  -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-5" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-5" data-slide-to="1"></li>
                <li data-target="#carousel-5" data-slide-to="2"></li>
                <li data-target="#carousel-5" data-slide-to="3"></li>
                <li data-target="#carousel-5" data-slide-to="4"></li>
                <li data-target="#carousel-5" data-slide-to="5"></li>
                <li data-target="#carousel-5" data-slide-to="5"></li>
            </ol>

            <!--  contenedor   -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/gloria 2.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b> INSTALACIONES SEDE LA GLORIA</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/gloria 3.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA GLORIA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/gloria 4.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA GLORIA</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/gloria 5.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA GLORIA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/gloria 6.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA GLORIA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/gloria 7.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA GLORIA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/gloria 8.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA GLORIA </b></h2>
                    </div>
                </div>
            </div>
            <!-- controles  -->
            <a href="#carousel-5" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a href="#carousel-5" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right " aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row5">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Sede La Gloria   </h3>
                </div>
                <div class="panel-body">
                    <ul class="acr">
                        <div class="col-lg-4">
                            <img  class="center-block"  src="images/ehumano.png" class="img-responsive"  width="58" height="58">
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="ht">Equipo Humano</h2>
                                <p class="accor" class="text-justify">
                                    <b>Docente: </b>Rubiela Ramírez
                                </p>
                            </li>
                        </div>
                        <div class="col-lg-4">
                            <img class="center-block" src="images/instalaciones.png" class="img-responsive" width="58" height="58">
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="ht">Instalaciones</h2>
                                <p class="accor" class="text-justify">
                               Un aula de clase donde se realizan todas las areas educativas de primaria, un comedor infantil y una cancha deportiva.
                                </p>
                            </li>
                        </div>
                        <div class="col-lg-4">
                            <img class="center-block" src="images/horarios.png" class="img-responsive"  width="58" height="58">
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="ht">Horarios</h2>
                                <p class="accor" class="text-justify">
                                Educacion basica primaria: <br>
                                    Lunes a Viernes de 7:00 am a 12:00 pm
                                </p>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'plantillas/footer.inc.php';
?>
<?php
include_once 'plantillas/documento-cierre.inc.php';
?>
