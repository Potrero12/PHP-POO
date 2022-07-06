<?php 

    require './Configuracion.php';

    // cuando es estatico no se instancia sino se llama de una la clase
    Configuracion::setColor("Azul");
    Configuracion::setEntorno("localhost");
    Configuracion::setNewsletter(true);

    // mostrar el valor de una propiedad
    echo Configuracion::$color."<br />";
    echo Configuracion::$entorno."<br />";
    echo Configuracion::$newsletter."<br />";

    $configuracion = new Configuracion();
    $configuracion::$color = "Verde";
    echo $configuracion::$color;
    var_dump($configuracion);

?>