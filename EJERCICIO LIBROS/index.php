<?php
//Incluir la clase Libro
require_once 'Libro.php';

//Crear dos instancias de la clase Libro
$libro1 = new Libro("Gabriel García Márquez", "Cien años de soledad", 482);
$libro2 = new Libro("J.K. Rowling", "Harry Potter y la piedra filosofal", 482);

//Mostrar la información de cada libro
echo $libro1->mostrarLibro() . "<br>";
echo $libro2->mostrarLibro() . "<br>";

//Comparar los libros y mostrar el resultado
echo Libro::compararLibros($libro1, $libro2);

?>
    

    