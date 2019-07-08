<?php 

if(isset($_SESSION["uid"]) || isset($_SESSION["sessiousuari"]) || isset($_SESSION["sessiopassword"])){

    $usuario = $_SESSION["sessiousuari"];
       
} else {header('location:login.php');
    
    echo 'no hay sesion';//TODO redireccion y sweetalert
}
