<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'SedesPubenza';

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
            <a name="principal"></a>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/pubenza 1.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE PRINCIPAL PUBENZA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/pubenza 2.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE PRINCIPAL PUBENZA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/pubenza 3.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE PRINCIPAL PUBENZA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/pubenza 4.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE PRINCIPAL PUBENZA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/pubenza 5.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE PRINCIPAL PUBENZA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/pubenza 6.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE PRINCIPAL PUBENZA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/pubenza 7.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE PRINCIPAL PUBENZA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/pubenza 8.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE PRINCIPAL PUBENZA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/pubenza 9.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE PRINCIPAL PUBENZA </b></h2>
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
                    <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Sede Principal   </h3>
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
                                    <b> Con 10 Docentes:</b><br><br>
                                    Olga Isabel Garzón Blanco, Elizabeth Mora Franco, Margarita Pulido Gil, Consuelo Daza Bautista, Luz Marina Calderón Palomino, Fredy René Hernández Oliveros, Oscar Javier Gámez Céspedes, Paola Andrea Rodríguez González, Sonia Medina Escobar, Ivonne Astrid Chacón Contreras.
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
                                    Una cancha deportiva construida en el 2018, un laboratorio, 8 aulas de clase mas una cordinacion y rectoria, un comedor mas una cafeteria.
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
                                    Lunes a Viernes de 7:00 a 1:00 pm   
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
                <li data-target="#carousel-2" data-slide-to="5"></li>
            </ol>

            <!--  contenedor   -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/viga 1.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE ALTO DE LA VIGA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/viga 2.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE ALTO DE LA VIGA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/viga 3.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE ALTO DE LA VIGA</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/viga 4.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE ALTO DE LA VIGA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/viga 5.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE ALTO DE LA VIGA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/viga 6.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE ALTO DE LA VIGA </b></h2>
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
                    <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Sede Alto de la Viga   </h3>
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
                                    <b>Docente:</b> Denis del Socorro Marulanda
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
        <div id="carousel-3" class="carousel slide" data-ride="carousel">
            <!--  indicadores  -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-3" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-3" data-slide-to="1"></li>
                <li data-target="#carousel-3" data-slide-to="2"></li>
                <li data-target="#carousel-3" data-slide-to="3"></li>
                <li data-target="#carousel-3" data-slide-to="4"></li>
            </ol>

            <!--  contenedor   -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/tete1.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA TETE </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/tete2.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA TETE </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/tete3.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA TETE</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/tete4.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA TETE </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/tete5.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA TETE</b></h2>
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
                    <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Sede La Tete   </h3>
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
                                    <b>Docente:</b> Hermencia Ortiz Serrano
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
                    <img src="images/salada1.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA SALADA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/salada2.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA SALADA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/salada3.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA SALADA</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/salada4.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA SALADA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/salada5.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA SALADA</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/salada6.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE LA SALADA</b></h2>
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
                    <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Sede La Salada   </h3>
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
                                    <b>Docente:</b> Alonso Pulido y Jenny Romero
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
                <li data-target="#carousel-5" data-slide-to="6"></li>
            </ol>

            <!--  contenedor   -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/malberto 1.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE MALBERTO </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/malberto 2.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE MALBERTO </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/malberto 3.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE MALBERTO</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/malberto4.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE MALBERTO </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/malberto5.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE MALBERTO</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/malberto6.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE MALBERTO</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/malberto7.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE MALBERTO</b></h2>
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
                    <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Sede Malberto  </h3>
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
                                    <b>Docente:</b> María Cristina Correal Triana
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
        <div id="carousel-6" class="carousel slide" data-ride="carousel">
            <!--  indicadores  -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-6" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-6" data-slide-to="1"></li>
                <li data-target="#carousel-6" data-slide-to="2"></li>
                <li data-target="#carousel-6" data-slide-to="3"></li>
                <li data-target="#carousel-6" data-slide-to="4"></li>
                <li data-target="#carousel-6" data-slide-to="5"></li>
                <li data-target="#carousel-6" data-slide-to="6"></li>
            </ol>

            <!--  contenedor   -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/vila.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE VILA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/vila2.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE VILA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/vila3.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE VILA</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/vila4.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE VILA </b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/vila5.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE VILA</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/vila6.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE VILA</b></h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/vila7.jpg" class="img-responsive "alt="">
                    <div class="carousel-caption hidden-xs">
                        <h2><b>INSTALACIONES SEDE VILA</b></h2>
                    </div>
                </div>
            </div>
            <!-- controles  -->
            <a href="#carousel-6" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a href="#carousel-6" class="right carousel-control" role="button" data-slide="next">
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
                    <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Sede Vila   </h3>
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
                                    <b>Docente:</b> Elizabeth Jaramillo Pérez
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

<?php
include_once 'plantillas/footer.inc.php';
?>
<?php
include_once 'plantillas/documento-cierre.inc.php';
?>