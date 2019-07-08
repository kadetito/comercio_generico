<?php session_start();
//require_once 'includes/sesion.php';
require_once '../path.php';
include '../ChromePhp.php';//log de Chrome
require_once ROOT_DIR.'/datos/conexion/conexion.php';
require (ROOT_DIR.'/clases/ClaseUpdateUsuarios.php');
require (ROOT_DIR.'/clases/settingsuser.php');




$nombre_cliente = filter_input(INPUT_POST, 'nomclient');
$dni_cliente = filter_input(INPUT_POST, 'dniclient');
$usuario_cliente = filter_input(INPUT_POST, 'usuarinom');
$apellidos_cliente = filter_input(INPUT_POST, 'cognomsclient');
$email_cliente = filter_input(INPUT_POST, 'emailclient');
$password_cliente = filter_input(INPUT_POST, 'usuaripass');
$idcliente = filter_input(INPUT_POST, 'idcliente');



if (empty($_POST['idcliente']) || empty($_POST['dniclient']) || empty($_POST['usuarinom']) || empty($_POST['cognomsclient'])
    || empty($_POST['emailclient']) || empty($_POST['usuaripass'])){
    $errors[] = "Todos los campos son obligatorios.";
    ChromePhp::log($errors[]);
} else {


    $id_setuser=intval($idcliente);
    $get_comerDel = ClaseUpdateUsuarios::updateRegistroUsuario($password_cliente,$usuario_cliente,$email_cliente,$dni_cliente,$apellidos_cliente,$nombre_cliente,$id_setuser);
    

        //por si actualizo el user y pass, vuelvo a logear
        $get_comer = SettingsUserGenerica::consultaLoginCambios($id_setuser);
        $U_suariocliente=       $get_comer->getUsuario();
        $P_asswordcliente=      $get_comer->getPassword();
        $_SESSION["sessiousuari"] = $U_suariocliente;
        $_SESSION["sessiopassword"] = $P_asswordcliente;
        ChromePhp::log("---".$U_suariocliente);
        ChromePhp::log("---".$P_asswordcliente);

    
} else
{
    $errors[] = "desconocido.";
}
    if (isset($errors)){
    
    		foreach ($errors as $error) {
    				echo $error;
    			}
    }
			if (isset($messages)){

							foreach ($messages as $message) {
									echo $message;
								}
			}
