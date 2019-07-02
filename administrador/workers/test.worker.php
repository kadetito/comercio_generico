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
    $descripcion_log="Inserción de nueva tienda no activa";
    $fecha_log = date('Y-m-d H:i:s');
    
        $get_InsertTienda = new Tienda($id_tipotienda,$tienda_nombre);
        $get_InsertTienda->inserTotalTienda();       
        $id_tien = $get_InsertTienda->getIdTienda();

        
        $get_InsertTienda = new ClaseLogs($descripcion_log,$fecha_log,$tienda_nombre,$id_tien);
        $get_InsertTienda->insertLog();       
        
        $_SESSION['id_tien'] = $id_tien;

        //guardo los settings de usuario de esta tienda
        $get_SettingsUserTienda = new SettingsUserGenerica($dni_cliente,$email_cliente,$apellidos_cliente,$nombre_cliente,$password_cliente,$usuario_cliente,$id_tien);
        $get_SettingsUserTienda->inserSettingsUserTienda(); 
        
        //guardo los settings hosting
        $fecha_alta = date("Y-m-d H:i:s");
        $get_SettingsHostTienda = new SettingsHostGenerica($fecha_alta,$usowww,$friendly,$protocolo_preferente,$dominio,$id_tien);
        $get_SettingsHostTienda->inserSettingsHostTienda(); 

        //guardo los settings de estructura
//         ChromePhp::log($id_estructura);
//         ChromePhp::log($id_tien);

        ChromePhp::log($_SESSION['id_tien']);
//         ChromePhp::log("A id estruc".$id_estruc);

        $get_SettingsEstructuraTienda = new SettingsEstructuraGenerica($id_tien,$id_estruc);
        $get_SettingsEstructuraTienda->inserSettingsEstructuraTienda(); 
 
        //guardo el estilo de esta estructura
        $orden=1;
//         ChromePhp::log($id_estil);
        $get_SettingsEstilTienda = new SettingsEstilGenerica($orden,$id_estil,$id_estructura,$id_tien);
        $get_SettingsEstilTienda->inserSettingsEstilTienda(); 
        
//             //guardo los idiomas de esta tienda
//             if (is_array($jsonIdiomas))
//             {   
//                 foreach ($jsonIdiomas as $jsonI ) {
//                     $id_locale = $jsonI;
//                     $id_tienda=$id_tien;
                    $get_IdiomasTienda = new IdiomasGenerica($id_tien,$id_locale);
                    $get_IdiomasTienda->inserIdiomasTienda();
//                 }
//             }
            
            //guardo las modalidades
//             if (is_array($jsonModalidades))
//             {
//                 foreach($jsonModalidades as $jsonM){
//                     $id_modali = $jsonM;
//                     $id_tienda=$id_tien;

                    $get_ModalidadesTienda = new ModalidadesGenerica($id_tien,$id_modali);
                    $get_ModalidadesTienda->inserModalidadesTienda();
//                 }
//             }
            
            //guardo los tipos de pago
//             if (is_array($jsonTipospago))
//             {
//                 foreach($jsonTipospago as $jsonT){
//                     $id_tipago = $jsonT;
//                     $id_tienda=$id_tien;

                    $get_TipospagoTienda = new TipospagoGenerica($id_tien,$id_tipago);
                    $get_TipospagoTienda->inserTipospagoTienda();
//                 }
//             }
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

    
