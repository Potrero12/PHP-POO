<?php 
    require_once './autoload.php';

    // namespace y paquetes

    use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
    use PanelAdministrador\Usuario as UsuarioAdmin;

    class Principal {

        public $usuario;
        public $categoria;
        public $entrada;

        public function __construct()
        {
            $this->usuario = new Usuario();
            $this->categoria = new Categoria();
            $this->entrada = new Entrada();
        }

        public function getUsuario()
        {
            return $this->usuario;
        }

        public function setUsuario($usuario)
        {
            $this->usuario = $usuario;

            return $this;
        }

        public function informacion(){
            echo __NAMESPACE__;
        }

        
    }

    // objeto principal
    $principal = new Principal();
    $principal->informacion();
    var_dump($principal->usuario);
    $metodos = get_class_methods($principal);
    $busqueda = array_search('setUsuario', $metodos);
    var_dump($busqueda);

    // objeto de panel administrador
    $usuario = new UsuarioAdmin();
    var_dump($usuario);

    // comprobar si existe una clase
    $clase = @class_exists('PanelAdministrador\Usuario');
    if($clase) {
        echo "<h1>Existe</h1>";
    } else {
        echo "<h1>No Existe</h1>";

    }
?>