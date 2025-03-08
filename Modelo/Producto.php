<?php
class Producto {
    private $Codigo = [];
    private $Nombre = [];
    private $Stock = [];
    private $ValorUnitario = [];

    function __construct($Codigo, $Nombre, $Stock, $ValorUnitario) {
        $this->propiedades = $params;
    }

    public function __set($Nombre, $valor) {
        $this->$Codigo = $Codigo;
        $this->$Nombre = $Nombre;
        $this->$Stock = $Stock;
        $this->$ValorUnitario = $ValorUnitario;
    }

    public function __get($nombre) {
        if (array_key_exists($nombre, $this->propiedades)) {
            return $this->propiedades[$nombre];
        }
        trigger_error("Propiedad no definida: " . $nombre, E_USER_NOTICE);
        return null;
    }

    // Método para obtener todas las propiedades
    public function obtenerPropiedades() {
        return $this->propiedades;
    }
}
?>
