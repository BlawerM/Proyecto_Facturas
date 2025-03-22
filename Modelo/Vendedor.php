<?php
include '../modelo/Persona.php';

class Cliente extendes Persona {
    private $Cod_Vendedor;
    private $Carnet_Vendedor;
    private $Dir_Vendedor;
    private $ID_PersonaFK;

    function __construct($Cod_Vendedor, $Carnet_Vendedor, $Dir_Vendedor, $ID_PersonaFK) {
        $this->Cod_Vendedor = $Cod_Vendedor;
        $this->Carnet_Vendedor = $Carnet_Vendedor;
        $this->Dir_Vendedor = $Dir_Vendedor;
        $this->ID_PersonaFK = $ID_PersonaFK;   
    }
    #region SetGetCodigo
    function setCod_Vendedor ($Cod_Vendedor){
        $this->Cod_Vendedor;
    }

    function getCod_Vendedor(){
        return $this->Cod_Vendedor;
    }
    #endregion

    #region SetGetCarnet
    function setCarnet_Vendedor ($Carnet_Vendedor){
        $this->Carnet_Vendedor;
    }

    function GetCarnet_Vendedor (){
        return $this->Carnet_Vendedor;
    }
    #endregion

    #region SetGetDireccion
    function setDir_Vendedor ($Dir_Vendedor){
        $this->Dir_Vendedor;
    }

    function getDir_Vendedor (){
        return $this->Dir_Vendedor;
    }
    #endregion

    #region SetGetPersonaFK
    function setID_PersonaFK ($ID_PersonaFK){
        $this->ID_PersonaFK;
    }
    
    function getID_PersonaFK (){
        return $this->ID_PersonaFK;
    }
    #endregion
}
?>