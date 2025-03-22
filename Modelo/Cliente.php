<?php
include '../modelo/Persona.php';

class Cliente extendes Persona {
    private $Cod_Cliente;
    private $Cred_Cliente;
    private $ID_PersonaFK;

    function __construct($Cod_Cliente, $Cred_Cliente, $ID_PersonaFK) {
        $this->Cod_Cliente = $Cod_Cliente;
        $this->Cred_Cliente = $Cred_Cliente;
        $this->ID_PersonaFK = $ID_PersonaFK;   
    }
    #region SetGetCodigo
    function setCod_Cliente ($Cod_Cliente){
        $this->Cod_Cliente;
    }

    function getCod_Cliente(){
        return $this->Cod_Cliente;
    }
    #endregion

    #region SetGetCreditos
    function setCred_Cliente ($Cred_Cliente){
        $this->Cred_Cliente;
    }

    function GetCred_Cliente (){
        return $this->Cred_Cliente;
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