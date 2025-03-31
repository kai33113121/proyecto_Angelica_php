<?php

class Usuario {
    // Atributos privados
    private $id;
    private $nombre;
    private $correo;
    private $clave;
    private $rol;

    // Constructor
    public function __construct($id, $nombre, $correo, $clave, $rol) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->clave = $clave;
        $this->rol = $rol;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getRol() {
        return $this->rol;
    }

    // Setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

    // Registrarse
    public function registrarse($nombre, $correo, $clave) {
        $this->setNombre($nombre);
        $this->setCorreo($correo);
        $this->setClave($clave);
        return "El usuario '{$this->nombre}' se ha registrado correctamente";
    }

    // Recibir datos
    public function recibirDatos() {
        return "ID: {$this->id}, Nombre: {$this->nombre}, Correo: {$this->correo}, Clave: {$this->clave}, Rol: {$this->rol}";
    }

    // Iniciar sesión
    public function iniciarSesion($correo, $clave) {
        if ($this->correo == $correo && $this->clave == $clave) {
            return "El usuario {$this->nombre} ha iniciado sesión correctamente";
        } else {
            return "Correo o clave incorrectos";
        }
    }

    // ctualizar perfil
    public function actualizarPerfil($nuevoNombre, $nuevoCorreo, $nuevaClave) {
        $this->setNombre($nuevoNombre);
        $this->setCorreo($nuevoCorreo);
        $this->setClave($nuevaClave);
        return "La información del usuario {$this->nombre} ha sido actualizada";
    }

    //  Cerrar sesión
    public function cerrarSesion() {
        return "El usuario {$this->nombre} ha cerrado sesión";
    }
} // 

?>