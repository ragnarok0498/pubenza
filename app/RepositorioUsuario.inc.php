<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Usuario.inc.php';

class RepositorioUsuario {

    public static function obtener_todos($conexion) {

        $usuarios = array();

        if (isset($conexion)) {

            try {

                include_once 'Usuario.inc.php';

                $sql = "SELECT * FROM usuarios";

                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();

                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $usuarios [] = new Usuario(
                                $fila['id'], $fila ['nombre'], $fila ['apellido'], $fila ['cedula'], $fila ['email'], $fila['password'], $fila ['fecha_registro'], $fila ['activo']
                        );
                    }
                } else {
                    print 'No hay usuarios';
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $usuarios;
    }

    public static function obtener_numero_usuarios($conexion) {
        $total_usuarios = null;

        if (isset($conexion)) {
            try {

                $sql = 'SELECT COUNT(*) as total FROM usuarios';

                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                $total_usuarios = $resultado['total'];
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $total_usuarios;
    }

    public static function insertar_usuario($conexion, $usuario) {
        $usuario_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO usuarios(nombre, apellido, cedula, email, password, fecha_registro, activo) VALUES(:nombre, :apellido, :cedula, :email, :password, NOW(), 0)";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':nombre', $usuario->obtener_nombre(), PDO::PARAM_STR);
                $sentencia->bindParam(':apellido', $usuario->obtener_apellido(), PDO::PARAM_STR);
                $sentencia->bindParam(':cedula', $usuario->obtener_cedula(), PDO::PARAM_STR);
                $sentencia->bindParam(':email', $usuario->obtener_email(), PDO::PARAM_STR);
                $sentencia->bindParam(':password', $usuario->obtener_password(), PDO::PARAM_STR);

                $usuario_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $usuario_insertado;
    }

    public static function nombre_existe($conexion, $nombre) {
        $nombre_existe = true;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM usuarios WHERE nombre = :nombre";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);

                $sentencia->execute();

                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    $nombre_existe = true;
                } else {
                    $nombre_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $nombre_existe;
    }
    
       public static function cedula_existe($conexion, $cedula) {
        $cedula_existe = true;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM usuarios WHERE cedula = :cedula";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':cedula', $cedula, PDO::PARAM_STR);
                
                $sentencia -> execute();

                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    $cedula_existe = true;
                } else {
                    $cedula_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $cedula_existe;
    }

    public static function email_existe($conexion, $email) {
        $email_existe = true;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM usuario WHERE email = :email";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':email', $email, PDO::PARAM_STR);

                $sentencia->execute();

                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    $email_existe = true;
                } else {
                    $email_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }

        return $email_existe;
    }

    public static function obtener_usuario_por_email($conexion, $email) {
        $usuario = null;

        if (isset($conexion)) {
            try {
                include_once 'Usuario.inc.php';

                $sql = "SELECT * FROM usuarios WHERE email = :email";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':email', $email, PDO::PARAM_STR);

                $sentencia->execute();

                $resultado = $sentencia->fetch();
                
                if(!empty($resultado)){
                    $usuario = new Usuario($resultado['id'],
                            $resultado['nombre'],
                            $resultado['apellido'],
                            $resultado['cedula'],
                            $resultado['email'],
                            $resultado['password'],
                            $resultado['fecha_registro'],
                            $resultado['activo']
                            );
                    
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        
        return $usuario;
    }
    
    public static function obtener_usuario_por_id($conexion, $id) {
        $usuario = null;

        if (isset($conexion)) {
            try {
                include_once 'Usuario.inc.php';

                $sql = "SELECT * FROM usuarios WHERE id = :id";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':id', $id, PDO::PARAM_STR);

                $sentencia->execute();

                $resultado = $sentencia->fetch();
                
                if(!empty($resultado)){
                    $usuario = new Usuario($resultado['id'],
                            $resultado['nombre'],
                            $resultado['apellido'],
                            $resultado['cedula'],
                            $resultado['email'],
                            $resultado['password'],
                            $resultado['fecha_registro'],
                            $resultado['activo']
                            );
                    
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $usuario;
    }
}
