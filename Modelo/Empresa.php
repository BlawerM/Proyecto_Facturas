<?php

class Empresa {
    private $Cod_Empresa;
    private $Nombre_Empresa;
    private $ID_PersonaFK;

    function __construct($Cod_Empresa, $Nombre_Empresa, $ID_PersonaFK) {
        $this->Cod_Empresa = $Cod_Empresa;
        $this->Nombre_Empresa = $Nombre_Empresa;
        $this->ID_PersonaFK = $ID_PersonaFK;   
    }
    #region SetGetCodigo
    function setCod_Empresa ($Cod_Empresa){
        $this->Cod_Empresa;
    }

    function getCod_Empresa(){
        return $this->Cod_Empresa;
    }
    #endregion

    #region SetGetNombre
    function setNombre_Empresa ($Nombre_Empresa){
        $this->Nombre_Empresa;
    }

    function GetNombre_Empresa (){
        return $this->Nombre_Empresa;
    }
    #endregion

    #region SetGetFKPersona
    function setID_PersonaFK ($ID_PersonaFK){
        $this->ID_PersonaFK;
    }

    function getID_PersonaFK (){
        return $this->ID_PersonaFK;
    }
    #endregion

}
?>