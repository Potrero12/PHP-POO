<?php 
    require './clases.php';

    $persona = new Persona();
    $persona->setNombre('Julian');
    var_dump($persona);

    $informatico = new Informatico();
    $informatico->setAltura(1.90);
    echo $informatico->sabeLenguages("JAVA, Javascript, PHP");
    var_dump($informatico);

    $tecnicoRedes = new TecnicoRedes();
    var_dump($tecnicoRedes);
?>