<?php

class Libro {
    // Atributos
    private $autor;
    private $titulo;
    private $paginas;

    // Constructor
    public function __construct($autor, $titulo, $paginas) {
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->paginas = $paginas;
    }

    // Método para mostrar la información del libro
    public function mostrarLibro() {
        return "El libro " . $this->titulo . ", del autor " . $this->autor . ", tiene " . $this->paginas . " páginas";
    }

    // Método para obtener el número de páginas (necesario para comparar)
    public function getPaginas() {
        return $this->paginas;
    }

    // Método para obtener el título (necesario para mostrar el libro con más páginas)
    public function getTitulo() {
        return $this->titulo;
    }
}

?>