<?php 


    


    /**
     * ALTA TIENDA
     * Recibo los parametros del formulario de alta
     * y los filtros
     */ 
$accion = filter_input(INPUT_POST, 'accion');
        //creo la tienda
if(isset($accion)){
    
    $id_tipotienda= 12;
    $tienda_nombre="TEST";
    $dni_cliente="43735032A";
    $email_cliente="hola@hola.com";
    $apellidos_cliente="Smith";
    $nombre_cliente= "John";
    $password_cliente="123456789";
    $usuario_cliente="usuario";
    $fecha_alta=date('Y-m-d H:i:s');
    $usowww="S";
    $friendly="S";
    $protocolo_preferente="http://";
    $dominio="www.hola.com";
    $id_estruc = 1;
    $orden=1;
    $id_estil=1;
    $id_estructura=1;
    $id_locale=1;
    $id_modali=1;
    $id_tipago=1;
    $descripcion_log="Inserci&oacute;n de nueva tienda no activa";
    $fecha_log = date('Y-m-d H:i:s');
    
        $get_InsertTienda = new Tienda($id_tipotienda,$tienda_nombre);
        $get_InsertTienda->inserTotalTienda();       
        $id_tien = $get_InsertTienda->getIdTienda();

        
        $get_InsertTienda = new ClaseLogs($descripcion_log,$fecha_log,$tienda_nombre,$id_tien);
        $get_InsertTienda->insertLog();       
        
        
//        endforeach;
            
            unset ($accion);
}
    


$fulminar = filter_input(INPUT_POST, 'fulminar');



//si recibo el parametreo id estructura en tiempo real via AJAX
if(isset($fulminar)){
    
    $id_tienda = $_SESSION['id_tien'];
    $get_comerDel = ClaseEliminar::eliminarRegistro($id_tienda);
    unset($id_tiend);
    unset($_SESSION['id_tien']);
}
else {
    echo 'no hay valores';
}

    
