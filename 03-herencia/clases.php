
<?php 
    // Herencia: la posibilidad de compartir atributos y metodos entre clases

    class Persona {

        public $nombre;
        public $apellido;
        public $altura;
        public $edad;

        public function __construct(){
            $this->nombre;
            $this->apellido;
            $this->altura;
            $this->edad;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function getEdad(){
            return $this->edad;
        }

        public function setNombre($nombre){
            return $this->nombre = $nombre;
        }

        public function setApellido($apellido){
            return $this->apellido = $apellido;
        }

        public function setAltura($altura){
            return $this->altura = $altura;
        }

        public function setEdad($edad){
            return $this->edad = $edad;
        }

        public function hablar(){
            return "Estoy Hablando";
        }

        public function caminar(){
            return "Estoy Caminando";
        }
    }

    class Informatico extends Persona {

        public $lenguajes;
        public $experienciaProgramando;

        public function __construct(){
            $this->lenguajes = "HTML, CSS, JS";
            $this->experienciaProgramando = 2;
        }

        public function sabeLenguages($lenguajes) {
            $this->lenguajes = $lenguajes;

            return $this->lenguajes;
        }

        public function programar(){
            return "Soy programador";
        }

        public function repararOrdenador(){
            return "Reparar Ordenadores";
        }

        public function hacerOfimatica(){
            return "Estoy escribiendo en word";
        }

    }

    class TecnicoRedes extends Informatico {

        public $auditarRedes;
        public $experienciaRedes;

        public function __construct(){
            // parent::__construct(); //para traer las deman propiedades de las clase que heredamos
            parent::__construct();
            $this->auditarRedes = "Experto";
            $this->experienciaRedes = 5;
        }

        public function auditorias() {
            return "Estoy auditando una red";
        }

    }


?>