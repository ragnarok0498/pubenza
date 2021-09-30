<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Entrada.inc.php';
include_once 'app/RepositorioEntrada.inc.php';
include_once 'app/ValidadorEntrada.inc.php';
include_once 'app/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';

$entrada_publica = 0;
if (isset($_POST['guardar'])) {
    Conexion :: abrir_conexion();

    $validador = new ValidadorEntrada($_POST['titulo'], $_POST['url'], htmlspecialchars($_POST['texto']), Conexion :: obtener_conexion());

    if (isset($_POST['publicar']) && $_POST['publicar'] == 'si') {
        $entrada_publica = 1;
    }

    if ($validador->entrada_valida()) {
        if (ControlSesion :: sesion_iniciada()) {

            $entrada = new Entrada('', $_SESSION['id_usuario'], $validador->obtener_url(), $validador->obtener_titulo(), $validador->obtener_texto(), '', $entrada_publica);

            $entrada_insertada = RepositorioEntrada :: insertar_entrada(Conexion :: obtener_conexion(), $entrada);

            if (($entrada_insertada)) {
                Redireccion :: redirigir(RUTA_GESTOR_ENTRADAS);
            }
        }else{
            Redireccion :: redirigir(RUTA_LOGIN);
        }
        
        Conexion :: cerrar_conexion();
    }
}


$titulo = 'nueva entrada';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>

<div class="registro">
    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><b> Nueva entrada</b></h1>    
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="form-nueva-entrada" method="post" action="<?php echo RUTA_NUEVA_ENTRADA ?>">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa el titudo de la entrada">
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Direccion unica sin espacios para la entrada">
                </div>
                <div class="form-group">
                    <label for="contenido">Contenido</label>
                    <textarea class="form-control" rows="7" id="contenido" name="texto" placeholder="Escribe aquí tu artículo"></textarea>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="publicar" value="si">Marca este recuadro para publicar la entrada
                    </label>
                </div><br>
                <button type="submit" class="btn btn-primary" name="guardar"> Guardar entrada</button>
            </form>
        </div>
    </div>
</div>


<?php
include_once 'plantillas/footer.inc.php';
?>
<?php
include_once 'plantillas/documento-cierre.inc.php';
?>

