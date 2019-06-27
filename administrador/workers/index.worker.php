<?php 


// ChromePhp::log($idEstructuraInstant);
// ChromePhp::warn('something went wrong!');

$paginador='';
$bucleIdiomasCheckbox='';
$bucleTiposTiendaCheckbox='';
$bucleModalidadesCheckbox = '';
$bucleTiposPagoCheckbox='';
$bucleEstructurasCheckbox = '';
$bucleEstilosCheckbox ='';
$respuestaServidor='';

$i = 0;
$ii = 0;

$thisSeccion='index';
$thisPagina= 'wizard';

//recibo parametros en array en JSON desde el formulario
$jsonIdiomas = json_decode(stripslashes(filter_input(INPUT_POST, 'jsonIdiomas')));
$jsonModalidades = json_decode(stripslashes(filter_input(INPUT_POST, 'jsonModalidades')));
$jsonTipospago = json_decode(stripslashes(filter_input(INPUT_POST, 'jsonTipospago')));
//recibo parametros
$accion = filter_input(INPUT_POST, 'accion');
$tienda_nombre = stripslashes(filter_input(INPUT_POST, 'tienda_nombre'));
$id_tipotienda = filter_input(INPUT_POST, 'id_tipotienda');
$usuario_cliente = filter_input(INPUT_POST, 'usuario_cliente');
$password_cliente = filter_input(INPUT_POST, 'password_cliente');
$nombre_cliente = filter_input(INPUT_POST, 'nombre_cliente');
$apellidos_cliente = filter_input(INPUT_POST, 'apellidos_cliente');
$email_cliente = filter_input(INPUT_POST, 'email_cliente');
$dni_cliente = filter_input(INPUT_POST, 'dni_cliente');
$id_moda = filter_input(INPUT_POST, 'id_moda');
$id_tipospago = filter_input(INPUT_POST, 'id_tipospago');
$dominio = filter_input(INPUT_POST, 'dominio');
$protocolo_preferente = filter_input(INPUT_POST, 'protocolo_preferente');
$usowww = filter_input(INPUT_POST, 'usowww');
$friendly = filter_input(INPUT_POST, 'friendly');
$id_estructura = filter_input(INPUT_POST, 'id_estructura');
// $idEstructuraInstant = filter_input(INPUT_POST, 'idForma');
$idEstructuraInstant = filter_input(INPUT_POST, 'elegido');


    /**
     * OBTENGO BUCLE IDIOMAS
     * @var unknown $resultado
     */
    $resulIdiomas = Idiomas::consultaSinFormato();
    $bucle_idiomas = $resulIdiomas[0];//me llega un array de los registros mas las paginas etc del metodo consulta
    $cont_Idiomas=0;
    $contadorIdiomas = count($bucle_idiomas);
    foreach($bucle_idiomas as $itemIdiomas):
    $ii++;
    if($contadorIdiomas!=''){
        $bucleIdiomasCheckbox.='<label class="containercheck" for="id_locale'.$itemIdiomas['id_locale'].'">'.$itemIdiomas['idioma_nombre'].' <input id="id_locale'.$itemIdiomas['id_locale'].'" class="styled-checkbox  required" name="id_locale[]" type="checkbox" value="'.$itemIdiomas['id_locale'].'"><span class="checkmark"></span></label>';    
    } 
    endforeach;
    
    /**
     * OBTENGO BUCLE TIPOS DE TIENDA
     * @var unknown $resultado
     */
    $resulTiposTienda = TiposTienda::consultaSinFormato();
    $bucle_TiposTienda = $resulTiposTienda[0];//me llega un array de los registros mas las paginas etc del metodo consulta
    $cont_TiposTienda=0;
    $contadorTiposTienda = count($bucle_TiposTienda);
    foreach($bucle_TiposTienda as $itemTiposTienda):
    $ii++;
    if($contadorTiposTienda!=''){
        $bucleTiposTiendaCheckbox.='<option value="'.$itemTiposTienda['id_tipotienda'].'">'.$itemTiposTienda['nombre_tipotienda'].'</option>';
    }
    endforeach;
    
    /**
     * OBTENGO BUCLE MODALIDADES
     * @var unknown $resultado
     */
    $resulModalidades = Modalidades::consultaSinFormato();
    $bucle_Modalidades = $resulModalidades[0];//me llega un array de los registros mas las paginas etc del metodo consulta
    $cont_Modalidades=0;
    $contadorModalidades = count($bucle_Modalidades);
    foreach($bucle_Modalidades as $itemModalidades):
    $ii++;
    if($contadorModalidades!=''){
        $bucleModalidadesCheckbox.='<label class="containercheck" for="id_moda'.$ii.'">'.$itemModalidades['nombre_modalidad'].' <input id="id_moda'.$ii.'" class="styled-checkbox required" name="id_moda[]" type="checkbox" value="'.$itemModalidades['id_modali'].'"><span class="checkmark"></span></label>';    
    }
    endforeach;
    
    /**
     * OBTENGO BUCLE TIPOS DE PAGO
     * @var unknown $resultado
     */
    $resulTiposPago = Formaspago::consultaSinFormato();
    $bucle_TiposPago = $resulTiposPago[0];//me llega un array de los registros mas las paginas etc del metodo consulta
    $cont_TiposPago=0;
    $contadorTiposPago = count($bucle_TiposPago);
    foreach($bucle_TiposPago as $itemTiposPago):
    $ii++;
    if($contadorTiposPago!=''){
        $bucleTiposPagoCheckbox.='<label class="containercheck" for="id_tipospago'.$ii.'">'.$itemTiposPago['nombre_tipago'].' <input id="id_tipospago'.$ii.'" class="styled-checkbox required" name="id_tipospago[]" type="checkbox" value="'.$itemTiposPago['id_tipago'].'"><span class="checkmark"></span></label>';
    }
    endforeach;

    /**
     * OBTENGO BUCLE ESTRUCTURAS
     * @var unknown $resultado
     */
    $numOfCols = 4;
    $rowCount = 0;
    $bootstrapColWidth = 12 / $numOfCols;
    $resulEstructuras = Estructuras::consultaSinFormato();
    $bucle_Estructuras = $resulEstructuras[0];//me llega un array de los registros mas las paginas etc del metodo consulta
    $cont_Estructuras=0;
    $contadorEstructuras = count($bucle_Estructuras);
    
    $bucleEstructurasCheckbox='<div class="row">';
    foreach($bucle_Estructuras as $itemEstructuras):
    $ii++;
    if($contadorEstructuras!=''){
        $bucleEstructurasCheckbox.='<div class="col-md-'.$bootstrapColWidth.'"><div class="card mb-2"><div class="thumbnail "><img class="percent" src="assets/img/'.$itemEstructuras['imagen_estructura'].'" alt="'.$itemEstructuras['nombre_estructura'].'" /></div></div><label class="containerradio" for="id_estructura'.$ii.'">'.$itemEstructuras['nombre_estructura'].' <input id="id_estructura'.$ii.'" class="styled-checkbox required" name="id_estructura" type="radio" value="'.$itemEstructuras['id_estruc'].'"><span class="checkmarkr"></span></label></div>';
    
    $rowCount++;
        if($rowCount % $numOfCols == 0) {
            $bucleEstructurasCheckbox.='</div><div class="row">';
        }
    }
    endforeach;

    
    //si recibo el parametreo id estructura en tiempo real via AJAX
if(isset($idEstructuraInstant)){ 
        ChromePhp::log($idEstructuraInstant);
        /**
         * OBTENGO BUCLE ESTILOS SEGUN ID ESTRUCTURA
         * @var unknown $resultado
         */
        $numOfCols = 4;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
        $resulEstilos = Estilos::consultaSinFormato($idEstructuraInstant);
        $bucle_Estilos = $resulEstilos[0];//me llega un array de los registros mas las paginas etc del metodo consulta
        $cont_Estilos=0;
        $contadorEstilos = count($bucle_Estilos);
        
        echo '<div class="row">';
        foreach($bucle_Estilos as $itemEstilos):
        $ii++;
        if($contadorEstilos!=''){
            echo '<div class="col-md-'.$bootstrapColWidth.'"><div class="card mb-2"><div class="thumbnail "><img class="percent" src="assets/img/'.$itemEstilos['imagen_estil'].'" alt="'.$itemEstilos['nombre_estil'].'" /></div></div><label class="containerradio" for="id_estilo'.$ii.'">'.$itemEstilos['nombre_estil'].' <input id="id_estilo'.$ii.'" class="styled-checkbox required" name="id_estilo" type="radio" value="'.$itemEstilos['id_estil'].'"><span class="checkmarkr"></span></label></div>';
            
            $rowCount++;
            if($rowCount % $numOfCols == 0) {
                echo '</div><div class="row">';
            }
        }
        endforeach;
}

    
    
    
    

    /**
     * ALTA TIENDA
     * Recibo los parametros del formulario de alta
     * y los filtros
     */ 
        
        //creo la tienda
        if(isset($accion)){
        $get_InsertTienda = new Tienda($id_tipotienda,$tienda_nombre);
        $get_InsertTienda->inserTotalTienda();       
        $id_tien = $get_InsertTienda->getIdTienda();
        
        //guardo los settings de usuario de esta tienda
        $get_SettingsUserTienda = new SettingsUserGenerica($dni_cliente,$email_cliente,$apellidos_cliente,$nombre_cliente,$password_cliente,$usuario_cliente,$id_tien);
        $get_SettingsUserTienda->inserSettingsUserTienda(); 
        
        //guardo los settings hosting
        $fecha_alta = date("Y-m-d H:i:s");
        $get_SettingsHostTienda = new SettingsHostGenerica($fecha_alta,$usowww,$friendly,$protocolo_preferente,$dominio,$id_tien);
        $get_SettingsHostTienda->inserSettingsHostTienda(); 

        //guardo los settings de estructura
        $get_SettingsEstructuraTienda = new SettingsEstructuraGenerica($id_estructura,$id_tien);
        $get_SettingsEstructuraTienda->inserSettingsEstructuraTienda(); 
        
            //guardo los idiomas de esta tienda
            if (is_array($jsonIdiomas))
            {   
                foreach ($jsonIdiomas as $jsonI ) {
                    $id_locale = $jsonI;
                    $id_tienda=$id_tien;
                    $get_IdiomasTienda = new IdiomasGenerica($id_tienda,$id_locale);
                    $get_IdiomasTienda->inserIdiomasTienda();
                }
            }
            
            //guardo las modalidades
            if (is_array($jsonModalidades))
            {
                foreach($jsonModalidades as $jsonM){
                    $id_modali = $jsonM;
                    $id_tienda=$id_tien;
                    ChromePhp::log($jsonM);
                    $get_ModalidadesTienda = new ModalidadesGenerica($id_tienda,$id_modali);
                    $get_ModalidadesTienda->inserModalidadesTienda();
                }
            }
            
            //guardo los tipos de pago
            if (is_array($jsonTipospago))
            {
                foreach($jsonTipospago as $jsonT){
                    $id_tipago = $jsonT;
                    $id_tienda=$id_tien;
                    ChromePhp::log($jsonT);
                    $get_TipospagoTienda = new TipospagoGenerica($id_tienda,$id_tipago);
                    $get_TipospagoTienda->inserTipospagoTienda();
                }
            }
//        endforeach;
        
    }
    
    
    //=========================================================
    // casteo las variables que se mostraran en el template
    //==========================================================
    $smarty->assign("bucleIdiomasCheckbox",$bucleIdiomasCheckbox,true);
    $smarty->assign("bucleTiposTiendaCheckbox",$bucleTiposTiendaCheckbox,true);
    $smarty->assign("bucleModalidadesCheckbox",$bucleModalidadesCheckbox,true);
    $smarty->assign("bucleTiposPagoCheckbox",$bucleTiposPagoCheckbox,true);
    $smarty->assign("bucleEstructurasCheckbox",$bucleEstructurasCheckbox,true);
    $smarty->assign("bucleEstilosCheckbox",$bucleEstilosCheckbox,true);
   
    

    
