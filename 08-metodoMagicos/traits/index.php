<?php

use Coche as GlobalCoche;
use Persona as GlobalPersona;

trait Utilidades {
    public function mostrarNombre(){
        echo "<h1>El Nombre es ".$this->nombre."</h1>";
    }
}

class Coche {

    public $nombre = "Ferrari Testarosa";
    public $Marca;

    use Utilidades;

}

class Persona {

    public $nombre = "Julian";
    public $apellido;

    use Utilidades;

}

class VideoJuego {

    public $nombre = "GTA V";
    public $year;

    use Utilidades;

}

    $coche = new GlobalCoche();
    $persona = new GlobalPersona();
    $videoJuego = new VideoJuego();

    $coche->mostrarNombre();
    $persona->mostrarNombre();
    $videoJuego->mostrarNombre();

    var_dump($coche);
    var_dump($persona);
    var_dump($videoJuego);
?>