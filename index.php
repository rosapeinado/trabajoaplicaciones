<?php
session_start();
require "logica/Administrador.php";
/*require "logica/Autor.php";
require "persistencia/Conexion.php";*/
$pagSinSesion = array(
    "presentacion/recuperarClave.php",
    "presentacion/autenticar.php"
);

if (isset($_GET["sesion"]) && $_GET["sesion"] == 0) {
    $_SESSION["id"] = null;
}
$pid = null;
if (isset($_GET["pid"])) {
    $pid = base64_decode($_GET["pid"]);
}
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.11.1/css/all.css" />
<link href="https://bootswatch.com/4/superhero/bootstrap.css"
	rel="stylesheet" />	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script
	src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>Amazonas</title>
<link rel="icon" type="image/png" href="img/logo.png">
</head>
<body>
<?php
if (isset($pid)) {
    if (isset($_SESSION["id"])) {
        include "presentacion/menuAdministrador.php";
        include $pid;
    } else if (in_array($pid, $pagSinSesion)) {
        include $pid;
    } else {
        header("Location: index.php");
    }
} else {
    include "presentacion/inicio.php";
}
?>	
</body>
</html>
