<?php 
    class Configuracion {

        // Self hace referencia a la clase actual y se usando cuando instancia dicha clase, es decir se usan métodos estáticos;

        public static $color;
        public static $newsletter;
        public static $entorno;

        public static function getColor()
        {
            return self::$color;
        }

        public static function setColor($color)
        {
            return self::$color = $color;
        }

        public static function getNewsletter()
        {
            return self::$newsletter;
        }

        public static function setNewsletter($newsletter)
        {
            self::$newsletter = $newsletter;
        }

        public static function getEntorno()
        {
            return self::$entorno;
        }

        public static function setEntorno($entorno)
        {
            self::$entorno = $entorno;
        }

    }
?>