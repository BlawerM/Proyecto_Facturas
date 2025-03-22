<?php
include '../modelo/Usuario.php';
include '../control/ControlUsuario.php';
include '../control/ControlConexion.php';
//objeto= new Clase(argumentos del constructor)
$boton="consultar";
switch ($boton) {
    case "guardar":
        $objUsuario= new Usuario("hugo@empresa.com","123");
        $objControlUsuario= new ControlUsuario($objUsuario);
        $objControlUsuario->guardar();
        break;
    case "modificar":
        $objUsuario= new Usuario("ccastro@empresa.com","1234567");
        $objControlUsuario= new ControlUsuario($objUsuario);
        $objControlUsuario->modificar();
        break;
    case "borrar":
        $objUsuario= new Usuario("hugo@empresa.com","");
        $objControlUsuario= new ControlUsuario($objUsuario);
        $objControlUsuario->borrar();
        break;
    case "consultar":
        $objUsuario= new Usuario("ccastro@empresa.com","");
        $objControlUsuario= new ControlUsuario($objUsuario);
        $objUsuario=$objControlUsuario->consultar();
        echo $objUsuario->getEmail();
        echo "<br>";
        echo $objUsuario->getContrasena();
        echo "<br>";
        break;        
}

echo "Listo";
//tarea hacer funcionar el modificar y el borrar
?>