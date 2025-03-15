<?php
class Producto {
    private $Cod_Producto;
    private $Nombre_Producto;
    private $Stock_Producto;
    private $VlrUnit_Producto;

    function __construct($Cod_Producto, $Nombre_Producto, $Stock_Producto, $VlrUnit_Producto) {
        $this->$Cod_Producto = $Cod_Producto;
        $this->$Nombre_Producto = $Nombre_Producto;
        $this->$Stock_Producto = $Stock_Producto;
        $this->$VlrUnit_Producto = $VlrUnit_Producto;    
    }
    #region SetGetCódigo
    function setCod_Producto ($Cod_Producto){
        $this->$Cod_Producto;
    }

    function getCod_Producto(){
        return $this->Cod_Producto;
    }
    #endregion

    #region SetGetNombre
    function setNombre_Producto ($Nombre_Producto){
        $this->$Nombre_Producto;
    }

    function getNombre_Producto (){
        return $this->Nombre_Producto;
    }
    #endregion

    #region SetGetStock
    function setStock_Producto ($Stock_Producto){
        $this->$Stock_Producto;
    }

    function getStock_Producto(){
        return $this->Stock_Producto;
    }
    #endregion

    #region SetGetVlrUnitario
    function setVlrUnit_Producto ($VlrUnit_Producto){
        $this->$VlrUnit_Producto;
    }

    function getVlrUnit_Producto (){
        return $this->VlrUnit_Producto;
    }
    #endregions
}
?>
