<?php
class Usuario
{
    private $id;
    private $nombre;
    private $correo;
    private $clave;
    private $rol;
    public function __construct($id, $nombre, $correo, $clave, $rol)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->clave = $clave;
        $this->rol = $rol;
    }




    public function registrarse($nombre, $correo, $clave)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->clave = $clave;

        return "El usuario '{$this->nombre}' se ha registrado correctamente";
    }

    public function recibirdatos(){
        return "id:'{$this->id}',nombre:'{$this->nombre}',correo:'{$this->correo}',clave:'{$this->clave}',rol:'{$this->rol}";
    }

    public function iniciarsesion($nombre, $correo,$clave){
        if ($this->clave == $clave){
            return "Ha iniciado sesión";
        }else{
            return "Clave incorrecta";
    }
}
    public function actualizarperfil($nuevonombre, $nuevocorreo,$nuevaclave){
        $this->nombre = $nuevonombre;  
        $this->correo = $nuevocorreo;
        $this->clave = $nuevaclave;  

        return "La información ha sido actualizada ";
    }

    public function cerrarsesion(){
        return "El usuario {$this->nombre} ha cerrado sesión";

    }
}

    $usuario1 = new Usuario(1,"Juan", "juan123@gmail.com", 5678, "comprador");
    $usuario2 = new Usuario(2,"Alexa","yuli.25@gmail.com",4321,"comprador");

    echo $usuario1->recibirdatos();
    echo PHP_EOL;

    echo $usuario1->registrarse("yuli","yuli3.24@gmail.com","1234");
    echo PHP_EOL;

    echo $usuario1->recibirdatos();
    echo PHP_EOL;

    echo $usuario1->iniciarsesion("yuli","yuli.24Qgmail.com","1334");
    echo PHP_EOL;

    echo $usuario1->actualizarperfil("Alexa","yuli.25@gmail.com",4321);
    echo PHP_EOL;

    echo $usuario1->recibirdatos();
    echo PHP_EOL;

    echo $usuario2->iniciarsesion("Alexa","yuli.25@gmail.com",4321,) ;

    echo PHP_EOL;

    echo $usuario1->cerrarsesion();