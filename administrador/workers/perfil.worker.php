<?php 

$nombrecliente='';
$apellidoscliente='';
$dnicliente='';
$Emailcliente='';
$Usuariocliente='';
$Passwordcliente='';
$Fechaalta='';
$idcliente='';
$bucleModalidadesSelect='';
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

    /**
     * OBTENGO DATOS DE CLIENTE
     *
     */
    $get_comer = ClaseGetPerfil::consultaUsersPorId($idcliente);
    $idTienda =   $get_comer->getIdTiendaS();
    
    
    /**
     * OBTENGO BUCLE MODALIDADES PARA SELECT
     * @var unknown $resultado
     */
    $resulModalidades = ModalidadesJoined::consultaSinFormatoSelectIdTienda($idTienda);
    $bucle_Modalidades = $resulModalidades[0];//me llega un array de los registros mas las paginas etc del metodo consulta
    $cont_Modalidades=0;
    $contadorModalidades = count($bucle_Modalidades);
    foreach($bucle_Modalidades as $itemModalidades):
    if($contadorModalidades!=''){
        $bucleModalidadesSelect.='<option value="'.$itemModalidades['id_modali'].'">'.$itemModalidades['nombre_modalidad'].'</option>';
    }
    endforeach;
    
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
$smarty->assign("bucleModalidadesSelect",$bucleModalidadesSelect,true);
