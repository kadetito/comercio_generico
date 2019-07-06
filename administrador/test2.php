<?php       
require_once 'path.php';
include 'ChromePhp.php';
require_once ROOT_DIR.'/datos/conexion/conexion.php';
require (ROOT_DIR.'/clases/ClaseValidaciones.php');

$usuario_cliente="e32e23e";
$get_usersVali = ClaseValidaciones::consultaValidaUsersIDTienda($usuario_cliente);
$UusersVali=$get_usersVali->getUsuarioclienteS();

echo $UusersVali;