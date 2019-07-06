<?php 
require_once '../path.php';
require_once ROOT_DIR.'/datos/conexion/conexion.php';
require (ROOT_DIR.'/clases/estilos.php');

$idEstructuraInstant = filter_input(INPUT_POST, 'elegido');

//si recibo el parametreo id estructura en tiempo real via AJAX
if(isset($idEstructuraInstant)){ 

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

   
    

    
