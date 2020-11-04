<?php
$correo = $_POST["correo"];
$clave = $_POST["clave"];

$administrador = new Administrador("", "", "", $correo, $clave);
if($administrador -> autenticar()){
    echo "Si se autentico. El id es: " . $administrador -> getIdAdministrador();
}else{
    echo "No se autentico";
}



?>
