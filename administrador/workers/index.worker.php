<?php 

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

$accion = filter_input(INPUT_POST, 'accion');
$tienda_nombre = filter_input(INPUT_POST, 'tienda_nombre');
$id_tipotienda = filter_input(INPUT_POST, 'id_tipotienda');
$id_locale = filter_input(INPUT_POST, 'id_locale');
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
        $bucleIdiomasCheckbox.='<label class="containercheck" for="id_locale'.$ii.'">'.$itemIdiomas['idioma_nombre'].' <input id="id_locale'.$ii.'" class="styled-checkbox" name="id_locale" type="checkbox" value="'.$itemIdiomas['id_locale'].'"><span class="checkmark"></span></label>';    
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
        $bucleModalidadesCheckbox.='<label class="containercheck" for="id_moda'.$ii.'">'.$itemModalidades['nombre_modalidad'].' <input id="id_moda'.$ii.'" class="styled-checkbox" name="id_moda" type="checkbox" value="'.$itemModalidades['id_modali'].'"><span class="checkmark"></span></label>';    
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
        $bucleTiposPagoCheckbox.='<label class="containercheck" for="id_tipospago'.$ii.'">'.$itemTiposPago['nombre_tipago'].' <input id="id_tipospago'.$ii.'" class="styled-checkbox" name="id_tipospago" type="checkbox" value="'.$itemTiposPago['id_tipago'].'"><span class="checkmark"></span></label>';
    }
    endforeach;

    /**
     * OBTENGO BUCLE ESTRUCTURAS
     * @var unknown $resultado
     */
    $resulEstructuras = Estructuras::consultaSinFormato();
    $bucle_Estructuras = $resulEstructuras[0];//me llega un array de los registros mas las paginas etc del metodo consulta
    $cont_Estructuras=0;
    $contadorEstructuras = count($bucle_Estructuras);
    foreach($bucle_Estructuras as $itemEstructuras):
    $ii++;
    if($contadorEstructuras!=''){
        $bucleEstructurasCheckbox.='<label class="containerradio" for="id_estructura'.$ii.'">'.$itemEstructuras['nombre_estructura'].' <input id="id_estructura'.$ii.'" class="styled-checkbox" name="id_estructura" type="radio" value="'.$itemEstructuras['id_estruc'].'"><span class="checkmarkr"></span></label>';
    }
    endforeach;
    

    /**
     * ALTA TIENDA
     * Recibo los parametros del formulario de alta
     * y los filtros
     */    
    if(isset($accion)){
        $get_InsertTienda = new Tienda($id_tipotienda,$tienda_nombre);
        $get_InsertTienda->inserTotalTienda();
        $get_IdiomasTienda = new Idiomas($id_tipotienda,$tienda_nombre);
        $get_IdiomasTienda->inserIdiomasTienda();
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
   
    

    
