<?php session_start();
require_once '../path.php';
include '../ChromePhp.php';//log de Chrome
require_once ROOT_DIR.'/datos/conexion/conexion.php';
require (ROOT_DIR.'/clases/settingsuser.php');


unset($_SESSION['sessiousuari']);
unset($_SESSION['sessiopassword']);


if(isset($_POST['username']) && $_POST['username'] != '' && isset($_POST['password']) && $_POST['password'] != '') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if($username != "" && $password != "") {
        try {
            $conexion = new conexion();
            $conexion->exec("SET NAMES 'utf8'");
            $query = "select * from `generica_settings_user` where `usuario_cliente`=:username and `password_cliente`=:password";
            $stmt = $conexion->prepare($query);
            $stmt->bindParam('username', $username, PDO::PARAM_STR);
            $stmt->bindValue('password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $row   = $stmt->fetch(PDO::FETCH_ASSOC);
            if($count == 1 && !empty($row)) {
                /******************** Your code ***********************/
                $_SESSION['sessiousuari']   = $row['usuario_cliente'];
                $_SESSION['sessiopassword'] = $row['password_cliente'];
                $_SESSION['uid'] = 1;
                echo "perfil.php";
            } else {
                echo "invalid";
            }
        } catch (PDOException $e) {
            echo "Error : ".$e->getMessage();
        }
    } else {
        echo "Campos requeridos!!!";
    }
} else {
    header('location:./login.php');
}



// if(isset($reqUsername) && $reqUsername != '' && isset($reqPassword) && $reqPassword != '') {
//     $username = trim($reqUsername);
//     $password = trim($reqPassword);

//   if($username != "" && $password != "") {
      

//     try {        
//       $get_comer = SettingsUserGenerica::consultaLoginManual($username,$password);
//       $U_suariocliente=       $get_comer->getUsuario();
//       $P_asswordcliente=      $get_comer->getPassword();      



//       if($count == 1 && !empty($registro)) {
          
//         /******************** creamos variables de sesion ***********************/
//           $_SESSION["sessiousuari"] = $U_suariocliente;
//           $_SESSION["sessiopassword"] = $P_asswordcliente;
//           $_SESSION['uid'] = 1;
          
//           $1e=$_SESSION["sessiousuari"];
//           $2e=$_SESSION["sessiopassword"];
//           ChromePhp::log($1e);
//           ChromePhp::log($2e);
          
//       //  header('Location: perfil.php');
//       } else {
//         echo "invalid";
//       }
//     } catch (PDOException $e) {
//       echo "Error : ".$e->getMessage();
//     }
//   } else {
//     echo "Los campos son obligatorios!";
//   }
// } else {
//  //   header('Location: login.php');
// }





