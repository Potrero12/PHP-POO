<?php 
    // funcion para cargar las clases
    function app_autoloader($class) {

        require 'classes/' . $class . '.php';

    }

    spl_autoload_register('app_autoloader');

?>