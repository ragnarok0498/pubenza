<?php

class Usuario {

    private $id;
    private $nombre;
    private $apellido;
    private $cedula;
    private $email;
    private $password;
    private $fecha_registro;
    private $activo;

    public function __construct($id, $nombre, $apellido, $cedula, $email, $password, $fecha_registro, $activo) {

        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cedula = $cedula;
        $this->email = $email;
        $this->password = $password;
        $this->fecha_registro = $fecha_registro;
        $this->activo = $activo;
    }

    public function obtener_id() {
        return $this->id;
    }

    public function obtener_nombre() {
        return $this->nombre;
    }

    public function obtener_apellido() {
        return $this->apellido;
    }

    public function obtener_cedula() {
        return $this->cedula;
    }

    public function obtener_email() {
        return $this->email;
    }

    public function obtener_password() {
        return $this->password;
    }

    public function obtener_fecha_registro() {
        return $this->fecha_registro;
    }

    public function obtener_activo() {
        return $this->activo;
    }

    public function cambiar_nombre($nombre) {
        $this->nombre = $nombre;
    }

    public function cambiar_apellido($apellido) {
        $this->apellido = $apellido;
    }

    public function cambiar_cedula($cedula) {
        $this->cedula = $cedula;
    }

    public function cambiar_email($email) {
        $this->email = $email;
    }

    public function cambiar_password($password) {
        $this->password = $password;
    }

    public function cambiar_activo($activo) {
        $this->activo = $activo;
    }

}