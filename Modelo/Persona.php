<?php
class Persona {
    private $Cod_Persona;
    private $Email_Persona;
    private $Nombre_Persona;
    private $Tel_Persona;

    function __construct($Cod_Persona, $Email_Persona, $Nombre_Persona, $Tel_Persona) {
        $this->Cod_Persona = $Cod_Persona;
        $this->Email_Persona = $Email_Persona;
        $this->Nombre_Persona = $Nombre_Persona; 
        $this->Tel_Persona = $Tel_Persona;    
    }
    #region SetGetCodigo
    function setCod_Persona ($Cod_Persona){
        $this->Cod_Persona;
    }

    function getCod_Persona(){
        return $this->Cod_Persona;
    }
    #endregion

    #region SetGetEmail
    function setEmail_Persona ($Email_Persona){
        $this->Email_Persona;
    }

    function GetEmail_Persona (){
        return $this->Email_Persona;
    }
    #endregion

    #region SetGetNombre
    function setNombre_Persona ($Nombre_Persona){
        $this->Nombre_Persona;
    }

    function getNombre_Persona (){
        return $this->Nombre_Persona;
    }
    #endregion

    #region SetGetTelefono
    function setTel_Persona ($Tel_Persona){
        $this->Tel_Persona;
    }
    
    function getTel_Persona (){
        return $this->Tel_Persona;
    }
    #endregion
}
?>