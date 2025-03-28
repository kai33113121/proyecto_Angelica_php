
<?php
//CREACION DE LOS GETTERS Y LOS SETTERS
//creacion de la clase
class contacto {
    private $nombre;
    private $numero;

    public function __construct($nombre, $numero) {
        $this->nombre = $nombre;
        $this->numero = $numero;
    }
//getter para nombre
    public function getNombre() {
        return $this->nombre;
    }
//setter para nombre
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
//getter para numero
    public function getNumero() {
        return $this->numero;
    }
//setter para numero
    public function setNumero($numero) {
        $this->numero = $numero;
    }    
}