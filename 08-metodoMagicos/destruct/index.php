<?php 

    // metodo magico: Los métodos mágicos son métodos especiales que sobreescriben acciones por defecto cuando se realizan ciertas acciones sobre un objeto.

    class Usuario {

        public $nombre;
        public $email;

        public function __construct()
        {   
            $this->nombre = "Julian Perdomo";
            $this->email = "julian@julian.com";
            echo "Instancia del objeto creada <br />";
        }

        public function __toString()
        {
            return "Hola, ".$this->nombre." Estas registrado con ".$this->email."<br />";
        }

        public function __destruct()
        {
            echo "<br />Destruyendo el objeto";
        }
    }

    $usuario = new Usuario();
    echo $usuario;
    echo $usuario->email;

    // for ($i=0; $i <= 200; $i++) { 
    //     echo $i."<br />";
    // }



?>