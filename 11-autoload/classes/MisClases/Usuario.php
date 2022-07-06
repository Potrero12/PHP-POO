<?php 

    namespace MisClases;

    class Usuario {
        public $nombre;
        public $email;

        public function __construct()
        {
            $this->nombre = "Julian Perdomo";
            $this->email = "julian@julian.com";
        }
    }
?>