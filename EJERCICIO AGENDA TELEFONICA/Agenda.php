<?php
// Incluir la clase Contacto
require_once "Contacto.php";

// Clase Agenda
class Agenda {
    private $contactos; // Array de tipo Contacto
    private $maxContactos = 10; // Capacidad máxima
    private $contador; // Contador de contactos registrados

    // Método constructor
    public function __construct() {
        // Inicializar el array con 10 posiciones vacías
        $this->contactos = array_fill(0, $this->maxContactos, null);
        $this->contador = 0; // Inicializar el contador
    }

    // Método para registrar un contacto
    public function registrarContacto($contacto) {
        if ($this->contador < $this->maxContactos) {
            $this->contactos[$this->contador] = $contacto;
            $this->contador++;
            return "Se ha registrado: " . $contacto->getNombre() . "<br>";
        } else {
            return "La agenda está llena.";
        }
    }

    // Método para listar todos los contactos
    public function listarContactos() {
        if ($this->contador == 0) {
            return "No hay contactos.";
        }

        $resultado = "Listar contactos:<br>";
        for ($i = 0; $i < $this->contador; $i++) {
            $resultado .= "Nombre: " . $this->contactos[$i]->getNombre() . ", Número: " . $this->contactos[$i]->getNumero() . "<br>";
        }
        return $resultado;
    }

    // Método para buscar un contacto por nombre
    public function buscarContacto($nombre) {
        for ($i = 0; $i < $this->contador; $i++) {
            if ($this->contactos[$i]->getNombre() == $nombre) {
                return "Búsqueda del contacto: " . $this->contactos[$i]->getNombre() . ", Número: " . $this->contactos[$i]->getNumero() . "<br>";
            }
        }
        return "No se encuentra.";
    }
}
?>