<?php
include_once 'app/ControlSesion.inc.php';
include_once 'app/config.inc.php';

Conexion :: abrir_conexion();
$total_usuarios = RepositorioUsuario :: obtener_numero_usuarios(Conexion::obtener_conexion());
?>

<nav class="navbar navbar-default navbar-static-top"> 
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Este botón despliega la barra de navegacíon</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home">Institución Educativa Departamental <span class="glyphicon glyphicon-education" aria-hidden="true"></span> </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php
            if(!ControlSesion::sesion_iniciada()){   
            ?>
            <ul class="nav navbar-nav">
                <li><a href="<?php echo RUTA_HOME ?>"> Inicio</a></li>
                <li><a href="<?php echo RUTA_INFORMACION ?>"></i> Institucional</a></li>
                <li><a href="<?php echo RUTA_PLANTELEDUCATIVO ?>"> Plantel Educativo</a></li>
                 <li class="dropdown">
                    <a href="sedespubenza" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                        Sector Pubenza <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="sedespubenza">
                                Pubenza
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Alto de la Viga 
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                La Tete
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                La Salada
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Malberto
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Vila
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="sedessantodomingo" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                        Sector Santo Domingo <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="sedessantodomingo">
                                Santo Domingo
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Recreo
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Mercedes
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Palacio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                La gloria
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <?php
            }
            ?>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (ControlSesion::sesion_iniciada()) {
                    ?>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <?php echo ' ' . $_SESSION['nombre_usuario']; ?>
                        </a>
                        <a href="<?php echo RUTA_GESTOR ?>">
                            <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Gestor
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo RUTA_LOGOUT; ?>">
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar sesión
                        </a>
                    </li>

                    <?php
                } else {
                    ?>
                    <li>
                        <a href="#">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <?php
                            echo $total_usuarios;
                            ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php RUTA_LOGIN ?>">
                            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Inicio Sesión</a>
                    </li>
                    <li>
                        <a href="<?php RURA_REGISTRO ?>">
                            <i class="fa fa-plus" aria-hidden="true"></i>  Registro</a>
                    </li>
                    <?php
                }
                ?>

            </ul>
        </div>

    </div> 
</nav> 
