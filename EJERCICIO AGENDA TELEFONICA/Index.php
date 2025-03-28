<?php
require_once "Agenda.php";

//instancia de una clase
$Agendar = new Agenda();

//creamos algunos de los contactos
$contacto1 = new Contacto("Ana Carreño", "312112456");
$contacto2 = new Contacto("Jair Guerra", "123456456");

//Registro de los contactos
echo $Agendar->RegistrarContacto($contacto1);
echo $Agendar->RegistrarContacto($contacto2);

//Mostrar contactos
echo "CONTACTOS" . "<br>";
echo $Agendar->listarContactos();

//Buscar contactos
echo "Busqueda de contactos" . "<br>";
echo $Agendar->buscarContacto("Ana Carreño");
echo $Agendar->buscarContacto("Santiago Guerra");

/*

otra solucion con ciclo switch

$agenda1 = new Agenda();


echo "<h2>Agenda Telefónica</h2>";
echo "1. Registrar contacto<br>";
echo "2. Listar contactos<br>";
echo "3. Buscar contacto<br>";
echo "4. Salir<br>";

$opcion ="1";

switch ($opcion) {
    case 1:
        echo $agenda1->registrarContacto();
        break;
    case 2:
        $agenda->listarContactos();
        break;
    case 3:
        
        $agenda->buscarContacto($nombreBuscar);
        break;
    case 4:
        echo "Saliendo de la agenda...";
        exit;
    default:
        echo "Opción inválida. Intente nuevamente.<br>";
}

echo "<br>";*/
?>