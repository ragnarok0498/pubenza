<?php

include_once 'RepositorioEntrada.inc.php';

class ValidadorEntrada {

    private $aviso_inicio;
    private $aviso_cierre;
    private $titulo;
    private $url;
    private $texto;
    private $error_titulo;
    private $error_url;
    private $error_texto;

    public function __contruct($titulo, $url, $texto, $conexion) {
        $this->aviso_inicio = "<br><div class='alert alert-danger' role='alert'>";
        $this->aviso_cierre = "</div>";

        $this->titulo = "";
        $this->url = "";
        $this->texto = "";

        $this->error_titulo = $this->validar_titulo($conexion, $titulo);
        $this->error_url = $this->validar_url($conexion, $url);
        $this->error_texto = $this->validar_texto($texto);
    }

    private function variable_iniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }

    private function validar_titulo($conexion, $titulo) {
        if (!$this->variable_iniciada($titulo)) {
            return " Debes escribir un titulo";
        } else {
            $this->titulo = $titulo;
        }

        if (strlen($titulo) > 255) {
            return "Titulo no puede ocupar mas de 255 caracteres";
        }

        if (RepositorioEntrada :: titulo_existe($conexion, $titulo)) {
            return "ya existe una entrada con ese título, por favor escoge una diferente.";
        }
    }

    private function validar_url($conexion, $url) {
        if (!$this->variable_iniciada($url)) {
            return "Debes insertar una URL";
        } else {
            $this->url = $url;
        }

        if (strlen($url) != strlen(trin($url))) {
            return "La url no puede contener espacios vacios";
        }

        if (RepositorioEntrada :: url_existe($conexion, $url)) {
            return"Ya existe otro articulo con la misma URL, elige una diferente.";
        }
    }

    private function validar_texto($conexion, $texto) {
        if (!$this->variable_iniciada($texto)) {
            return"El contenido no puede estar vacio";
        } else {
            $this->texto = $texto;
        }
    }

    public function obtener_titulo() {
        return $titulo;
    }

    public function obtener_url() {
        return $url;
    }

    public function obtener_texto() {
        return $texto;
    }

    public function mostrar_titulo() {
        if (!$this->titulo != "") {
            echo 'value= "' . $this->url . '"';
        }
    }

    public function mostrar_texto() {
        if ($this->texto != "" && strlen(trin($this->texto)) > 0) {
            echo $this->texto;
        }
    }

    
    public function mostrar_error_titulo() {
        if (!$this->error_titulo != "") {
            echo $this->aviso_inicio . $this->error_titulo . $this->aviso_cierre;
        }
    }
    public function mostrar_error_url() {
        if (!$this->error_url != "") {
            echo $this->aviso_inicio . $this->error_url . $this->aviso_cierre;
        }
    }
    public function mostrar_error_texto() {
        if (!$this->error_texto != "") {
            echo $this->aviso_inicio . $this->error_texto . $this->aviso_cierre;
        }
    }
    
    public function entrada_valida() {
        if ($this-> error_titulo == "" && $this-> error_url == "" && $this-> error_texto == "") {
            return true;
            
        } else {
            return false;
        }
    }

}
