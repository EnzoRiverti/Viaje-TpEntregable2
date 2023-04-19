<?php
class Viaje{
    //Atributos
    private $codigo;
    private $destino;
    private $cantMax;
    private $pasajeros;
    private $responsable;
    //METODOS
    public function __construct($codigoP, $destinoP, $cantMaxP,$newPasajeros, $newResponsable){
        $this->codigo = $codigoP;
        $this->destino = $destinoP;
        $this->cantMax = $cantMaxP;
        $this->pasajeros = $newPasajeros;
        $this->responsable = $newResponsable;
    }
    //Get y set de los atributos
    //Retorna valor codigo
    public function getCodigo(){
        return $this->codigo;
    }
    //Setea el codigo
    public function setCodigo($codigoP){
        $this->codigo = $codigoP;
    }
    //Retorna valor destino
    public function getDestino(){
        return $this->destino;
    }
    //setea el el destino
    public function setDestino($destinoP){
        $this->destino = $destinoP;
    }
    //Retorna valor cantidad maxima de pasajeros
    public function getCantMax(){
        return $this->cantMax;
    }
    //setea la cantidad max de pasajeros
    public function setCantMax($cantMaxP){
        $this->cantMax = $cantMaxP;
    }
    //Retorna los datos de los pasajeros 
    public function getPasajeros(){
        return $this->pasajeros;
    }
    //Setea la informacion de los pasajeros
    public function setPasajeros($pasajerosP){
        $this->pasajeros = $pasajerosP;
    }
    public function getResponsable(){
        return $this->responsable;
    }
    public function setResponsable($newResponsable){
        $this->responsable = $newResponsable;
    }
    //Muestra por pantalla
    public function __toString(){
        return ("Datos del viaje: " . "\n" . "Codigo: " . $this->getCodigo() . "\n" . "Destino: " . $this->getDestino() . "\n" . "Cantidad maxima de pasajeros: " . $this->getCantMax() . "\n" . "Informacion del pasajero: " . "\n" . $this->cadenaPasajeros() . "\n" . "Responsable: " . $this->getResponsable());
    } 
    //Metodo para cambiar el dato segun el indice 
    public function nuevoDato($indicePasajero, $clave, $datoNuevo){
        $this->pasajeros[$indicePasajero][$clave] = $datoNuevo;
    }
    

    /**
         * Crea una cadena de caracteres con los datos de los pasajeros
         * @return array
         */
        public function cadenaPasajeros() {
            // 

            $cadena = ""; 
            $coleccPasajeros = $this->getPasajeros(); 

            for($i=0 ; $i<count($coleccPasajeros) ; $i++) {
                $nombrePasa = $coleccPasajeros[$i]->getNombre();
                $apellidoPasa = $coleccPasajeros[$i]->getApellido();
                $nroDocPasa = $coleccPasajeros[$i]->getNroDni();
                $nroTelPasa = $coleccPasajeros[$i]->getTelefono();
                $nroPasa = $coleccPasajeros[$i]->getNroPasajero();
                $cadena = $cadena . "Nro del Pasajero" . $nroPasa ."\n". 
                    "Nombre: " . $nombrePasa . "\n" . 
                    "Apellido: " . $apellidoPasa . "\n" .  
                    "Nro de documento: " . $nroDocPasa . "\n" .  
                    "Nro de Telefono: " . $nroTelPasa . "\n" . "\n" ;
            }    
            return $cadena ; 
        }   
    
        public function cambiarUnPasajero($indicePasajero, $nuevoPasajero){
            $this->pasajeros[$indicePasajero] = $nuevoPasajero;
        }

        public function agregarPasajero($newPasajero){
           array_push($this->pasajeros, $newPasajero);
        }
}