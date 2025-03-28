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

    // Getters
    public function getAutor() {
        return $this->autor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getPaginas() {
        return $this->paginas;
    }

    // Setters
    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setPaginas($paginas) {
        $this->paginas = $paginas;
    }

    // Método para mostrar la información del libro
    public function mostrarLibro() {
        return "El libro " . $this->titulo . ", del autor " . $this->autor . ", tiene " . $this->paginas . " páginas";
    }

    // Método para comparar libros (será usado en index.php)
    public static function compararLibros($libro1, $libro2) {
        if ($libro1->getPaginas() > $libro2->getPaginas()) {
            return "El libro con más páginas es: " . $libro1->getTitulo();
        } elseif ($libro2->getPaginas() > $libro1->getPaginas()) {
            return "El libro con más páginas es: " . $libro2->getTitulo();
        } else {
            return "Ambos libros tienen el mismo número de páginas.";
        }
    }
}

?>