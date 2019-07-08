<?php 

$nombrecliente='';
$apellidoscliente='';
$dnicliente='';
$Emailcliente='';
$Usuariocliente='';
$Passwordcliente='';
$Fechaalta='';
$idcliente='';
    
    /**
     * OBTENGO DATOS DE CLIENTE
     * 
     */
    $get_comer = ClaseGetPerfil::consultaUsers($usuario);
    $idcliente.=   $get_comer->getIdsetuserS();
    $nombrecliente.=   $get_comer->getNomClienteS();
    $apellidoscliente.=$get_comer->getApeClienteS();
    $dnicliente.=      $get_comer->getDNIClienteS();
    $Emailcliente.=    $get_comer->getEmailclienteS();
    $Usuariocliente.=  $get_comer->getUsuarioclienteS();
    $Passwordcliente.= $get_comer->getPasswordclienteS();

    
    
//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================

$smarty->assign("nombrecliente",$nombrecliente,true);
$smarty->assign("apellidoscliente",$apellidoscliente,true);
$smarty->assign("dnicliente",$dnicliente,true);
$smarty->assign("Emailcliente",$Emailcliente,true);
$smarty->assign("Usuariocliente",$Usuariocliente,true);
$smarty->assign("Passwordcliente",$Passwordcliente,true);
$smarty->assign("idcliente",$idcliente,true);