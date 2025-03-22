<?php
class Persona {
    private $Cod_Persona;
    private $Email_Persona;
    private $Nro_Factura;
    private $Nombre_Persona;
    private $Tel_Persona;

    function __construct($Cod_Factura, $Fecha_Factura, $Nro_Factura, $Total_Factura, $Cod_PersonaFK) {
        $this->$Cod_Factura = $Cod_Factura;
        $this->$Fecha_Factura = $Fecha_Factura;
        $this->$Nro_Factura = $Nro_Factura;
        $this->$Total_Factura = $Total_Factura; 
        $this->$Cod_PersonaFK = $Cod_PersonaFK;    
    }
    #region SetGetCodigo
    function setCod_Factura ($Cod_Factura){
        $this->$Cod_Factura;
    }

    function getCod_Factura(){
        return $this->Cod_Factura;
    }
    #endregion

    #region SetGetFecha
    function setFecha_Factura ($Fecha_Factura){
        $this->$Fecha_Factura;
    }

    function getFecha_Factura (){
        return $this->Fecha_Factura;
    }
    #endregion

    #region SetGetNroFactura
    function setNro_Factura ($Nro_Factura){
        $this->$Nro_Factura;
    }

    function getNro_Factura(){
        return $this->Nro_Factura;
    }
    #endregion

    #region SetGetTotal
    function setTotal_Factura ($Total_Factura){
        $this->$Total_Factura;
    }

    function getTotal_Factura (){
        return $this->Total_Factura;
    }
    #endregion

    #region SetGetPersonaFK
    function setCod_PersonaFK ($Cod_PersonaFK){
        $this->$Cod_PersonaFK;
    }
    
    function getCod_PersonaFK (){
        return $this->Cod_PersonaFK;
    }
    #endregion
}
?>