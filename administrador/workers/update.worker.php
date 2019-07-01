<?php session_start();
require_once '../path.php';
require_once ROOT_DIR.'/datos/conexion/conexion.php';
require (ROOT_DIR.'/clases/ClaseUpdate.php');
include '../ChromePhp.php';


$id_tiend = filter_input(INPUT_GET, 'id_tien');



//si recibo el parametreo id estructura en tiempo real via AJAX
if(isset($id_tiend)){ 
    
    $id_tienda = $id_tiend;
    $get_comerDel = ClaseUpdate::updateRegistro($id_tienda);
   unset($id_tiend);
   unset($_SESSION['id_tien']);
}
else {
    echo 'no hay valores';
}
   

    
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

