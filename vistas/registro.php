<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Usuario.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/ValidadorRegistro.inc.php';
include_once 'app/Redireccion.inc.php';

if (isset($_POST['enviar'])) {
    Conexion :: abrir_conexion();

    $validador = new ValidadorRegistro($_POST['nombre'], $_POST['apellido'], $_POST['cedula'], $_POST['email'], $_POST['clave1'], $_POST['clave2'], Conexion :: obtener_conexion());

    if ($validador->registro_valido()) {
        $usuario = new Usuario('', $validador->obtener_nombre(), $validador->obtener_apellido(), $validador->obtener_cedula(), $validador->obtener_email(), password_hash($validador->obtener_clave(), PASSWORD_DEFAULT), '', '');
        $usuario_insertado = RepositorioUsuario :: insertar_usuario(Conexion :: obtener_conexion(), $usuario);

        if ($usuario_insertado) {
            Redireccion :: redirigir(RUTA_REGISTRO_CORRECTO . '/' . $usuario->obtener_nombre());
        }
    }

    Conexion :: cerrar_conexion();
}

$titulo = 'Registro';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>

<div class="registro">
    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <b>  Formulario de registro </b></h1>    
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><b> NOTA</b></h4>  
                    </div>
                </div>
                <div class="panel-body">
                    <br>
                    <p class="text-justify">
                        Solo los docentes se pueden registrar y confirmaran en la base de datos que pertenecen a la institución con el numero de cedula.
                    </p>
                    <br>
                    <a href="iniciosesion.php">¿Ya tienes cuenta?</a>
                    <br>
                    <br>
                    <a href="#">¿Olvidaste tu contraseña?</a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title text-center">
                        <h4><b> INTRODUCE TUS DATOS PERSONALES</b></h4>  
                    </div>
                </div>
                <div class="panel-body text-justify">
                    <form role="form"method="post" action=" <?php echo RUTA_REGISTRO ?>">
                        <?php
                        if (isset($_POST['enviar'])) {
                            include_once 'plantillas/registro_validado.inc.php';
                        } else {
                            include_once 'plantillas/registro_vacio.inc.php';
                        }
                        ?>
                </div>
                </form>
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

