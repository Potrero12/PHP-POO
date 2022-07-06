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
        // clases - molde para crear mas objetos de tipo coche con caracteristicas parecidas
        class Coche {

            // atributos o propiedades
            public $color = "rojo";
            public $modelo = "F40";
            public $velocidad = 300;
            public $marca = "Ferrari";
            public $caballaje = 500;
            public $plazas = 2;

            // metodos
            public function getColor(){
                return $this->color;
            }

            public function setColor($color){
                return $this->color = $color;
            }

            public function getModelo(){
                return $this->modelo;
            }
            
            public function setModelo($modelo){
                return $this->modelo = $modelo;
            }

            public function getVelocidad(){
                return $this->velocidad;
            }

            public function setVelocidad($velocidad){
                return $this->velocidad = $velocidad;
            }

            public function acelerar(){
                $this->velocidad++;
            }

            public function frenar(){
                $this->velocidad--;
            }


        }

        // crear un objeto o instanciar la clase
        $coche1 = new Coche();
        $coche2 = new Coche();

        // usar los metodos
        // echo $coche->getVelocidad();

        $coche1->setColor('Amarillo');
        echo "El color del coche es ".$coche1->getColor()."<br />";
        $coche1->acelerar();
        $coche1->acelerar();
        $coche1->acelerar();
        $coche1->acelerar();
        $coche1->frenar();
        
        $coche2->setColor('Azul');
        $coche2->setModelo('California T.');
        $coche2->setVelocidad(400);

        echo "La velocidad del coche es ".$coche1->getVelocidad();

        var_dump($coche1);
        var_dump($coche2);
    ?>
</body>
</html>