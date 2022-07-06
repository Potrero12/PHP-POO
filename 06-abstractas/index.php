<?php 
    abstract class Ordenador {

        // clase abstracta es aquella que no podemos instanciar pero podemos heredar para usar sus propiedades

        public $encendido;

        abstract public function Encender();

        public function Apagar(){
            $this->encendido = false;
        }
    }

    class PcAsus extends Ordenador {
       
        public $software;

        public function Encender()
        {
            $this->encendido = true;
        }

        public function arrancarSoftware(){
            $this->software = true;
        }

    }

    $ordenador = new PcAsus();
    $ordenador->arrancarSoftware();
    $ordenador->Encender();
    $ordenador->Apagar();
    
    var_dump($ordenador);
?>