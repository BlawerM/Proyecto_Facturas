<?php
class Producto {
    private $Codigo;
    private $Nombre;
    private $Stock;
    private $ValorUnitario;

    function __construct($Codigo, $Nombre, $Stock, $ValorUnitario) {
        $this->$Codigo = $Codigo;
        $this->$Nombre = $Nombre;
        $this->$Stock = $Stock;
        $this->$ValorUnitario = $ValorUnitario;
    }


}
?>
