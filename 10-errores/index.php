<?php 
    // excepciones error que se generar en nuestra aplicacion

    // capturar excepciones
    try {
        throw new Exception('Errores de logica');
    } catch (Exception $e) {
        echo $e;
    } finally {
        echo "Todo Correcto";
    }

?>