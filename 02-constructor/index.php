<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - POO</title>
</head>
<body>
    <h1>PHP - POO</h1>
    <hr />

    <?php 
        require './Coche.php';

        $coche = new Coche("Amarillo", "California T.", 200, "Ferrari", 180, 2);
        $coche2 = new Coche("Azul", "California T.", 200, "Ferrari", 180, 2);
        $coche3 = new Coche("Verde", "California T.", 200, "Ferrari", 180, 2);
        $coche4 = new Coche("Negro", "California T.", 200, "Ferrari", 180, 2);

        echo $coche->mostrarInformacion($coche2);

        // echo $coche->getModelo();
        // $coche->setVelocidad(600);
        // echo $coche->getVelocidad();

    ?>
</body>
</html>