<?php session_start();
/**
 * 
 * EVENTOS 
 * INDEX > index.php > index.tpl
 * 
 * @author kadet
 * 
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');

//conexion a bbdd--------------------------------------------------
require_once 'path.php';
include 'ChromePhp.php';
require_once ROOT_DIR.'/datos/conexion/conexion.php';
//libreria smarty y variables de inicio----------------------------
require ROOT_DIR.'/smarty/libs/Smarty.class.php';
require ROOT_DIR.'/includes/smartyvariablesinicio.php';
//determina si se ha iniciado la sesion----------------------------
require ("includes/sesion.php");
//CLASES-----------------------------------------------------------
//     //settings
//     require (ROOT_DIR.'/clases/settings.class.php');
//     //datosUsuarioLogeado
//     require (ROOT_DIR.'/clases/usuario.class.php');


     require (ROOT_DIR.'/clases/clasetienda.php');
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
// //WORKERS----------------------------------------------------------  
//     //settings
    require (ROOT_DIR.'/workers/perfil.worker.php');


//$smarty->assign("paginador",$paginador,true); 
 
//=========================================================
// template a usar
//==========================================================
$smarty->display(ROOT_DIR.'/templates/perfil.tpl');
