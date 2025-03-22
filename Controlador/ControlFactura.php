<?php
    class ControlFactura{
        
	   var $objFactura;

        function __construct($objFactura){
            $this->objFactura = $objFactura;
        }

       /* function validarIngreso(){
                $msg = "Correcto";
                $validar = false;
                $usu = $this->objFactura->getNomUsuario(); 
                $con = $this->objFactura->getContrasena();
                $comandoSql = "SELECT * FROM tblUsuario WHERE nomUsuario='$usu' AND contrasena='$con'";
                $objControlConexion = new ControlConexion();
                $objControlConexion->abrirBd($GLOBALS['serv'], GLOBALS['usua'], $GLOBALS['pass'], $GLOBALS['bdat'], $GLOBALS['port']);
                $recordSet = $objControlConexion->ejecutarSelect($comandoSql);
                try
                {
                    if (mysqli_num_rows($recordSet) > 0) 
                    {
                        $validar = true;
                    }
                    $objControlConexion->cerrarBd();
                }
                catch (Exception $objExcetion)
                {
                    $msg = $objExcetion->getMessage();
                } 
                return $validar;
        }*/

        function consultarFacturas($Cod_Factura){
            $msg = "Correcto";
            $listadoFactura = [];
            $comandoSQL = "SELECT Cod_Factura FROM Factura WHERE CodFactura ='$Cod_Factura'";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd($GLOBALS['serv'], $GLOBALS['usua'], $GLOBALS['pass'], $GLOBALS['bdat'], $GLOBALS['port']);
            $recordSet = $objControlConexion->ejecutarSelect($comandoSQL);
            try
            {
                if (mysqli_num_rows($recordSet) > 0)
                {
                    $i = 0;
                    while ($row = $recordSet->fetch_array(MYSQLI_BOTH))
                    {
                        $listadoFactura[$i] = $row[0];
                        $i++;
                    }
                    $objControlConexion->cerrarBd();
                }
            }
            catch (Exception $objExcetion)
            {
                $msg = $objExcetion->getMessage();
            }
            return $listadoFactura;
        }

        function guardar(){
            $Cod_Factura = $this->Cod_Factura->getCod_Factura();
            $Fecha_Factura = $this->Fecha_Factura->getFecha_Factura();
            $Nro_Factura = $this->Nro_Factura->getNro_Factura();
            $Total_Factura = $this->Total_Factura->getTotal_Factura();
            $Cod_PersonaFK = $this->Cod_PersonaFK->getCod_PersonaFK();
                
            $comandoSql = "INSERT INTO Factura(Cod_Factura, Fecha_Factura, Nro_Factura, Total_Factura, Cod_PersonaFK)
            VALUES ('$Cod_Factura', '$Fecha_Factura','$Nro_Factura', '$Total_Factura', '$Cod_PersonaFK')";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost", "root","","bdejemplo", 3306);
            $objControlConexion->ejecutarComandoSql($comandoSql);
            $objControlConexion->cerrarBd();
        }
        
        function consultar(){
            $Cod_Factura = $this->objFactura->getCod_Factura(); 
        
            $comandoSql = "SELECT * FROM Factura WHERE CodFactura ='$Cod_Factura'";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost", "root","","bd_facturas", 3306);
            $recordSet = $objControlConexion->ejecutarSelect($comandoSql);
            
            if ($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                $this->objFactura->setCod_Factura($row['Cod_Factura']);
            }
            $objControlConexion->cerrarBd();
            return $this->objFactura;
        }

        function modificar(){
            $ema = $this->objUsuario->getEmail(); 
            $con = $this->objUsuario->getContrasena();
            
            $comandoSql = "UPDATE usuario SET contrasena='$con' WHERE email = '$ema'";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost", "root","","bdejemplo", 3306);
            $objControlConexion->ejecutarComandoSql($comandoSql);
            $objControlConexion->cerrarBd();
        }

        function borrar(){
            $ema= $this->objUsuario->getEmail(); 
            $comandoSql = "DELETE FROM usuario WHERE email = '$ema'";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost", "root","","bdejemplo", 3306);
            $objControlConexion->ejecutarComandoSql($comandoSql);
            $objControlConexion->cerrarBd();
        }

        function listar(){
            $comandoSql = "SELECT * FROM usuario";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd($GLOBALS['serv'], $GLOBALS['usua'], $GLOBALS['pass'], $GLOBALS['bdat'], $GLOBALS['port']);
            $recordSet = $objControlConexion->ejecutarSelect($comandoSql);
            if (mysqli_num_rows($recordSet) > 0) {
                $arregloUsuarios = array();
                $i = 0;
                while($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                    $objUsuario = new Usuario("","");
                    $objUsuario->setEmail($row['email']);
                    $objUsuario->setContrasena($row['contrasena']);
                    $arregloUsuarios[$i] = $objUsuario;
                    $i++;
                }
            }
            $objControlConexion->cerrarBd();
            return $arregloUsuarios;
        }
    }
?>