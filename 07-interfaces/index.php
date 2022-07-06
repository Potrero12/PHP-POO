<?php 
    // interfaces - contrato donde se definen metodos y en que orden estan en una clase

    interface Ordenador{
        public function encender();
        public function apagar();
        public function reiniciar();
        public function desfragmentar();
        public function detectarUsb();
    }

    class iMac implements Ordenador {

        public $modelo;

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function encender()
        {
            
        }

        
        public function apagar()
        {
            
        }

        
        public function reiniciar()
        {
            
        }

        
        public function desfragmentar()
        {
            
        }

        public function detectarUsb()
        {
            
        }

    }

    $macintosh = new iMac();
    $macintosh->setModelo('Macbook Pro');
    echo $macintosh->getModelo();
    var_dump($macintosh);
?>