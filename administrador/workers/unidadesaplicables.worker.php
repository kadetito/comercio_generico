<?php session_start();

require_once '../path.php';
include '../ChromePhp.php';//log de Chrome
require_once ROOT_DIR.'/datos/conexion/conexion.php';
require (ROOT_DIR.'/clases/ClaseGetUsuario.php');
require (ROOT_DIR.'/clases/ClaseGetPerfil.php');
require (ROOT_DIR.'/clases/ClaseGetModalidades.php');
require (ROOT_DIR.'/clases/modalidades.php');
$idcliente = filter_input(INPUT_POST, 'idcliente');

        /**
         * OBTENGO DATOS DE CLIENTE
         *
         */
        $get_comer = ClaseGetPerfil::consultaUsersPorId($idcliente);
        $idTienda =   $get_comer->getIdTiendaS();
        
        /**
         * OBTENGO MODALIDADES DE ESTE USUARIO/TIENDA
         * @var unknown $resultado
         */        
        $resulModalidades = ClaseGetModalidades::consultaSinFormatoPorTienda($idTienda);
        $bucle_Modalidades = $resulModalidades[0];
        $contadorModalidades = count($bucle_Modalidades);
        foreach($bucle_Modalidades as $itemModalidades):
        if($contadorModalidades!=''){
            echo '<tr><td>'.$itemModalidades['nombre_modalidad'].'</td><td>'.$itemModalidades['id_modali'].'</td></tr>';
        }
        endforeach;




// if (empty($_POST['idcliente']) || empty($_POST['dniclient']) || empty($_POST['usuarinom']) || empty($_POST['cognomsclient'])
//     || empty($_POST['emailclient']) || empty($_POST['usuaripass'])){
//     $errors[] = "Todos los campos son obligatorios.";
//     ChromePhp::log($errors[]);
// } elseif (!empty($_POST['idcliente'])){


//     $id_setuser=intval($idcliente);
//     $get_comerDel = ClaseUpdateUsuarios::updateRegistroUsuario($password_cliente,$usuario_cliente,$email_cliente,$dni_cliente,$apellidos_cliente,$nombre_cliente,$id_setuser);
    

//         //por si actualizo el user y pass, vuelvo a logear
//         $get_comer = SettingsUserGenerica::consultaLoginCambios($id_setuser);
//         $U_suariocliente=       $get_comer->getUsuario();
//         $P_asswordcliente=      $get_comer->getPassword();
//         $_SESSION["sessiousuari"] = $U_suariocliente;
//         $_SESSION["sessiopassword"] = $P_asswordcliente;
//         ChromePhp::log("---".$U_suariocliente);
//         ChromePhp::log("---".$P_asswordcliente);

    
// } else
// {
//     $errors[] = "desconocido.";
// }
//     if (isset($errors)){
    
//     		foreach ($errors as $error) {
//     				echo $error;
//     			}
//     }
// 			if (isset($messages)){

// 							foreach ($messages as $message) {
// 									echo $message;
// 								}
// 			}

			
// 			//=========================================================
// 			// casteo las variables que se mostraran en el template
// 			//==========================================================
			
// // 			$smarty->assign("apellidoscliente",$apellidoscliente,true);
// // 			$smarty->assign("dnicliente",$dnicliente,true);
// // 			$smarty->assign("Emailcliente",$Emailcliente,true);
// // 			$smarty->assign("Usuariocliente",$Usuariocliente,true);
// // 			$smarty->assign("Passwordcliente",$Passwordcliente,true);
// // 			$smarty->assign("idcliente",$idcliente,true);
			
			