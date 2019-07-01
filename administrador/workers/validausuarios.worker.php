<?php 
require_once '../path.php';
include '../ChromePhp.php';
require_once ROOT_DIR.'/datos/conexion/conexion.php';
require (ROOT_DIR.'/clases/ClaseGetUsuario.php');

// ChromePhp::log($idEstructuraInstant);
// ChromePhp::warn('something went wrong!');

$email_cliente = filter_input(INPUT_POST, 'email_cliente');
$usuario_cliente = filter_input(INPUT_POST, 'usuario_cliente');

/**
 * compruebo que el nombre de usuario no este cogido
 */

if (isset($usuario_cliente)) {   
    ChromePhp::log($usuario_cliente);
    try {
        $get_users = ClaseGetUsuario::consultaUsers($usuario_cliente);
        $Uusers=$get_users->getUsuarioclienteS();
        
        if ($Uusers==$usuario_cliente) {
            echo '1';
        } else {
            echo '0';
        }
    } catch (Exception $e) {echo '0';
        die($e->getMessage());
    }
}

   
/**
 * compruebo que el email no este ya registrado
 */

if (isset($email_cliente)) {
    ChromePhp::log($email_cliente);
    try {
        $get_users = ClaseGetUsuario::consultaEmails($email_cliente);
        $Eemail=$get_users->getEmailclienteS();

        if ($Eemail==$email_cliente) {
            echo '1';
        } else {
            echo '0';
        }
        
    } catch (Exception $e) {echo '0';
        die($e->getMessage());
    }
}


    
