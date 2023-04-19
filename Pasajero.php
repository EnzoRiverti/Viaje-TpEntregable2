<?php

class Pasajero{

    private $nombre;
    private $apellido; 
    private $nroDni;
    private $telefono;
    private $nroPasajero;

    //Metodos

    public function __construct($nombre, $apellido, $nroDni, $telefono, $nroPasajero){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nroDni = $nroDni;
        $this->telefono = $telefono;
        $this->nroPasajero = $nroPasajero;
    }
    //Metodos de acceso
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($newNombre){
        $this->nombre = $newNombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($newApellido){
        $this->apellido = $newApellido;
    }
    public function getNroDni(){
        return $this->nroDni;
    }
    public function setNroDni($newDni){
        $this->nroDni = $newDni;
    }
    public function getTelefono(){
        return $this->telfono;
    }
    public function setTelefono($newTelefono){
        $this->telefono = $newTelefono;
    }
    public function getNroPasajero(){
        return $this->nroPasajero;
    }
    public function setNroPasajero($newNroPasajero){
        $this->nroPasajero = $newNroPasajero;
    }

    public function __toString(){
    return ("Datos del pasajero: " . "\n" . "Numero de pasajero: " . $this->getNroPasajero() . "Nombre: " . $this->getNombre() . "\n" . "Apellido: " . $this->getApellido() . "\n" . "Numero de DNI: " . $this->getNroDni() . "\n" . "Numero de telefono: " . $this->getTelefono());
 
}

}