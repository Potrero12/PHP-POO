<?php 
    // clases - molde para crear mas objetos de tipo coche con caracteristicas parecidas
    class Coche {

        // atributos o propiedades
        public $color; //cualquiera puede ver la propiedad
        private $modelo; // unicamente desde la clase
        protected $velocidad; // desde la clase y quienes lo heredan
        public $marca;
        public $caballaje;
        public $plazas;

        // constructor metodo que se ejecuta primero se le pasan atributos y nunca devuelve nada
        public function __construct($color, $modelo, $velocidad, $marca, $caballaje, $plazas){
            $this->color = $color;
            $this->modelo = $modelo;
            $this->velocidad = $velocidad;
            $this->marca = $marca;
            $this->caballaje = $caballaje;
            $this->plazas = $plazas;
        }

        // metodos
        public function getColor(){
            return $this->color;
        }

        public function setColor($color){
            return $this->color = $color;
        }

        public function getModelo(){
            return $this->modelo;
        }
        
        public function setModelo($modelo){
            return $this->modelo = $modelo;
        }

        public function getVelocidad(){
            return $this->velocidad;
        }

        public function setVelocidad($velocidad){
            return $this->velocidad = $velocidad;
        }

        public function acelerar(){
            $this->velocidad++;
        }

        public function frenar(){
            $this->velocidad--;
        }

        public function mostrarInformacion(Coche $miCocheObj){

            if(is_object($miCocheObj)){
                $informacion = "<h1>Informacioo del coche</h1>";
                $informacion .= "Color: ".$miCocheObj->color."<br />";
                $informacion .= "Marca: ".$miCocheObj->marca."<br />";
                $informacion .= "Modelo: ".$miCocheObj->modelo."<br />";
                $informacion .= "Velocidad: ".$miCocheObj->velocidad."<br />";
            } else {
                $informacion =  "Tu dato es este: ". $miCocheObj;
            }


            return $informacion;

        }


    }
?>