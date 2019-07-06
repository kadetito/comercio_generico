<?php 

$nombrecliente='';
$apellidoscliente='';
$dnicliente='';
$Emailcliente='';
$Usuariocliente='';
$Passwordcliente='';
$Fechaalta='';

//si hay login
if(isset($_SESSION["sessiousuari"]) || isset($_SESSION["sessiopassword"])){
    echo $_SESSION["sessiousuari"];
    echo $_SESSION["sessiopassword"];
    $usuario = $_SESSION["sessiousuari"];
    
    /**
     * OBTENGO DATOS DE CLIENTE
     * 
     */
    $get_comer = ClaseGetPerfil::consultaUsers($usuario);
    $nombrecliente.=   $get_comer->getNomClienteS();
    $apellidoscliente.=$get_comer->getApeClienteS();
    $dnicliente.=      $get_comer->getDNIClienteS();
    $Emailcliente.=    $get_comer->getEmailclienteS();
    $Usuariocliente.=  $get_comer->getUsuarioclienteS();
    $Passwordcliente.= $get_comer->getPasswordclienteS();


} else {
    
   echo 'no hay sesion';//TODO redireccion y sweetalert
}

//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================

$smarty->assign("nombrecliente",$nombrecliente,true);
$smarty->assign("apellidoscliente",$apellidoscliente,true);
$smarty->assign("dnicliente",$dnicliente,true);
$smarty->assign("Emailcliente",$Emailcliente,true);
$smarty->assign("Usuariocliente",$Usuariocliente,true);
$smarty->assign("Passwordcliente",$Passwordcliente,true);
