<?php 

require_once ROOT_DIR.'/datos/conexion/conexion.php';


// ChromePhp::log($idEstructuraInstant);
// ChromePhp::warn('something went wrong!');


$idTienda = $_SESSION['id_tien'];
ChromePhp::log($idTienda);

//si recibo el parametreo id estructura en tiempo real via AJAX
if(isset($idTienda)){ 

        /**
         * OBTENGO TIENDA
         * @var unknown $resultado
         */
    $get_comer = ClaseTienda::consultaDetalle($idTienda);
    $id_dtienda                 =$get_comer->getIdTienda();
    $tienda_nombre                 =$get_comer->getNombreTienda();
    $id_tipotienda               =$get_comer->getTipoTiendaTienda();
        

    echo ''.$tienda_nombre.'';

       
}
else {
    echo 'no hay valores';
}
   
    

    
