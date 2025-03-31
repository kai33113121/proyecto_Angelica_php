<?php
// Incluir la clase Usuario
require_once 'Usuario.php';

// instancias
$usuario1 = new Usuario(1, "Jair", "jair000@gmail.com", "5678", "comprador");
$usuario2 = new Usuario(2, "Ana", "ANA.25@gmail.com", "4321", "comprador");

// Mostrar datos iniciales de usuario1
echo $usuario1->recibirDatos() . "<br>";

// Registrar nuevos datos para usuario1
echo $usuario1->registrarse("Anastasio", "ANAIS.24@gmail.com", "1234") . "<br>";
echo $usuario1->recibirDatos() . "<br>";

// Intentar iniciar sesión con usuario1 (clave incorrecta)
echo $usuario1->iniciarSesion("ANAIS.24@gmail.com", "1334") . "<br>";

// Intentar iniciar sesión con usuario1 (clave correcta)
echo $usuario1->iniciarSesion("ANAIS.24@gmail.com", "1234") . "<br>";

// Actualizar perfil de usuario1
echo $usuario1->actualizarPerfil("Ana", "ANA.25@gmail.com", "4321") . "<br>";
echo $usuario1->recibirDatos() . "<br>";

// Iniciar sesión y cerrar sesion
echo $usuario2->iniciarSesion("ANA.25@gmail.com", "4321") . "<br>";
echo $usuario1->cerrarSesion() . "<br>";
?>