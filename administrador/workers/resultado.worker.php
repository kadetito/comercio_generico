<?php 

$idtienda='';
$tiendanombre='';
$nombretipotienda='';
$nombrecliente='';
$apellidoscliente='';
$dnicliente='';
$Emailcliente       ='';
$Usuariocliente     ='';
$Passwordcliente    ='';
$Fechaalta          ='';
$Nombretipotienda   ='';
$Dominio            ='';
$Friendly           ='';
$Protocolopreferente='';
$Rutaservidor       ='';
$Usowww             ='';
$Nombreestructura   ='';
$Nombreestil        ='';
$bucleIdiomas='';
$buclePagos='';
$bucleModalidades='';
$errorLocalizado='';
if (isset($_SESSION['id_tien'])){ 
    

    $idTienda = $_SESSION['id_tien'];ChromePhp::log($idTienda);
//si recibo el parametreo id estructura en tiempo real via AJAX
if($idTienda!=''){ 
    ChromePhp::log($idTienda);
        /**
         * OBTENGO TIENDA
         * @var unknown $resultado
         */
            $get_comer = ClaseTienda::consultaDetalle($idTienda);
            $id_dtienda       =$get_comer->getIdTienda();
            $tienda_nombre    =$get_comer->getNombreTienda();
            $nombre_tipotienda=$get_comer->getTipoTienda();
            $nombre_cliente=   $get_comer->getNomCliente();
            $apellidos_cliente=$get_comer->getApeCliente();
            $dni_cliente =     $get_comer->getDNICliente();
            $E_mailcliente=         $get_comer->getEmailcliente();
            $U_suariocliente=       $get_comer->getUsuariocliente();
            $P_asswordcliente=      $get_comer->getPasswordcliente();
            $F_echaalta=            $get_comer->getFechaalta();
            $D_ominio=              $get_comer->getDominio();
            $F_riendly=             $get_comer->getFriendly();
            $P_rotocolopreferente=  $get_comer->getProtocolopreferente();
            $R_utaservidor=         $get_comer->getRutaservidor();
            $U_sowww=               $get_comer->getUsowww();
            $N_ombreestructura=     $get_comer->getNombreestructura();
            $N_ombreestil=          $get_comer->getNombreestil(); 
            $idtienda.=$id_dtienda;
            $tiendanombre.=$tienda_nombre;
            $nombretipotienda.=$nombre_tipotienda;
            $nombrecliente.=$nombre_cliente;
            $apellidoscliente.=$apellidos_cliente;
            $dnicliente.=$dni_cliente;
            $Emailcliente.=          $E_mailcliente;
            $Usuariocliente.=        $U_suariocliente;
            $Passwordcliente.=       $P_asswordcliente;
            $Fechaalta.=             $F_echaalta;
            $Dominio.=               $D_ominio;
            $Friendly.=              $F_riendly;
            $Protocolopreferente.=   $P_rotocolopreferente;
            $Rutaservidor.=          $R_utaservidor;
            $Usowww.=                $U_sowww;
            $Nombreestructura.=      $N_ombreestructura;
            $Nombreestil.=           $N_ombreestil;   

    /**
     * OBTENGO BUCLE IDIOMAS
     * @var unknown $resultado
     */
    $resulIdiomas = ClaseTienda::consultaIdiomas($idTienda);
    $bucle_idiomas = $resulIdiomas[0];//me llega un array de los registros mas las paginas etc del metodo consulta
    $cont_Idiomas=0;
    $contadorIdiomas = count($bucle_idiomas);
    foreach($bucle_idiomas as $itemIdiomas):
    if($contadorIdiomas!=''){
        $bucleIdiomas.='<li>'.$itemIdiomas['idioma_nombre'].'</li>';
    }
    endforeach;

    /**
     * OBTENGO BUCLE TIPOS DE PAGO
     * @var unknown $resultado
     */
    $resulTiposPago = ClaseTienda::consultaPagos($idTienda);
    $bucle_TiposPago = $resulTiposPago[0];//me llega un array de los registros mas las paginas etc del metodo consulta
    $cont_TiposPago=0;
    $contadorTiposPago = count($bucle_TiposPago);
    foreach($bucle_TiposPago as $itemTiposPago):
    if($contadorTiposPago!=''){
        $buclePagos.='<li>'.$itemTiposPago['nombre_tipago'].'</li>';
    }
    endforeach;

    /**
     * OBTENGO BUCLE MODALIDADES
     * @var unknown $resultado
     */
    $resulModalidades = ClaseTienda::consultaModalidades($idTienda);
    $bucle_Modalidades = $resulModalidades[0];//me llega un array de los registros mas las paginas etc del metodo consulta
    $cont_Modalidades=0;
    $contadorModalidades = count($bucle_Modalidades);
    foreach($bucle_Modalidades as $itemModalidades):
    if($contadorModalidades!=''){
        $bucleModalidades.='<li>'.$itemModalidades['nombre_modalidad'].'</li>';
    }
    endforeach;

}

}
else {echo '<meta http-equiv="refresh" content="0;url=index.php">';}


    
//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("idtienda",$idtienda,true);
$smarty->assign("tiendanombre",$tiendanombre,true);
$smarty->assign("nombretipotienda",$nombretipotienda,true);
$smarty->assign("nombrecliente",$nombrecliente,true);
$smarty->assign("apellidoscliente",$apellidoscliente,true);
$smarty->assign("dnicliente",$dnicliente,true);
$smarty->assign("Emailcliente",$Emailcliente,true);
$smarty->assign("Usuariocliente",$Usuariocliente,true);
$smarty->assign("Passwordcliente",$Passwordcliente,true);
$smarty->assign("Fechaalta",$Fechaalta,true);
$smarty->assign("Nombretipotienda",$Nombretipotienda,true);
$smarty->assign("Dominio",$Dominio,true);
$smarty->assign("Friendly",$Friendly,true);
$smarty->assign("Protocolopreferente",$Protocolopreferente,true);
$smarty->assign("Rutaservidor",$Rutaservidor,true);
$smarty->assign("Usowww",$Usowww,true);
$smarty->assign("Nombreestructura",$Nombreestructura,true);
$smarty->assign("Nombreestil",$Nombreestil,true);
$smarty->assign("bucleIdiomas",$bucleIdiomas,true);
$smarty->assign("buclePagos",$buclePagos,true);
$smarty->assign("bucleModalidades",$bucleModalidades,true);
$smarty->assign("errorLocalizado",$errorLocalizado,true);

