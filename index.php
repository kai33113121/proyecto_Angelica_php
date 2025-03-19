<?php

// Incluir la clase Libro
require_once 'Libro.php';

// Crear dos instancias de la clase Libro
$libro1 = new Libro("Gabriel García Márquez", "Cien años de soledad", 482);
$libro2 = new Libro("J.K. Rowling", "Harry Potter y la piedra filosofal", 309);

// Mostrar la información de cada libro
echo $libro1->mostrarLibro() . "<br>";
echo $libro2->mostrarLibro() . "<br>";

// Función para comparar los libros y mostrar el título del que tiene más páginas
function compararLibros($libro1, $libro2) {
    if ($libro1->getPaginas() > $libro2->getPaginas()) {
        echo "El libro con más páginas es: " . $libro1->getTitulo();
    } elseif ($libro2->getPaginas() > $libro1->getPaginas()) {
        echo "El libro con más páginas es: " . $libro2->getTitulo();
    } else {
        echo "Ambos libros tienen el mismo número de páginas.";
    }
}

// Llamar a la función para comparar los libros
compararLibros($libro1, $libro2);

?>