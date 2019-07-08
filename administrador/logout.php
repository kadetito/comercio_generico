<?php session_start();
/**
 * 
 * LOGOUT 
 * LOGOOUT > logout.php > logout.tpl
 * 
 * @author kadet
 * 
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');

//conexion a bbdd--------------------------------------------------
require_once 'path.php';//ruta definida
include 'ChromePhp.php';//log de Chrome
require_once ROOT_DIR.'/datos/conexion/conexion.php';
//libreria smarty y variables de inicio----------------------------
require ROOT_DIR.'/smarty/libs/Smarty.class.php';
require ROOT_DIR.'/includes/smartyvariablesinicio.php';
//determina si se ha iniciado la sesion----------------------------
require ("includes/sesion.php");
//CLASES-----------------------------------------------------------
     require (ROOT_DIR.'/clases/tienda.php');
     require (ROOT_DIR.'/clases/settingsuser.php');
     require (ROOT_DIR.'/clases/settingshost.php');
     require (ROOT_DIR.'/clases/idiomas.php');
     require (ROOT_DIR.'/clases/cliente.php');
     require (ROOT_DIR.'/clases/formaspago.php');
     require (ROOT_DIR.'/clases/tipostienda.php');
     require (ROOT_DIR.'/clases/host.php');
     require (ROOT_DIR.'/clases/modalidades.php');
     require (ROOT_DIR.'/clases/estructuras.php');
     require (ROOT_DIR.'/clases/estilos.php');
     require (ROOT_DIR.'/clases/ClaseGetUsuario.php');
     require (ROOT_DIR.'/clases/ClaseLogs.php');
     require (ROOT_DIR.'/clases/ClaseValidaciones.php');
// //WORKERS----------------------------------------------------------  
    require (ROOT_DIR.'/workers/logout.worker.php');

//$smarty->assign("paginador",$paginador,true); 
 
//=========================================================
// template smarty a usar por este PHP
//==========================================================
$smarty->display(ROOT_DIR.'/templates/logout.tpl');
