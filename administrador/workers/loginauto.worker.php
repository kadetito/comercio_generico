<?php 
/**
 * recibo el token y lo desfragmento para obtener el DNI y conseguir user y pass leyendo la tabla
 * luego los paso a sesion para hacer el login automatico
 * 
 * @var Ambiguous $freshtokn
 */
$freshtokn = filter_input(INPUT_GET, 'freshtokn');
if($freshtokn==''){header('Location: perfil.php');} else {
    $freshtoknLeft = substr($freshtokn, 5);    
    $freshtoknRight= substr($freshtoknLeft,0, -5);   
    $get_comer = SettingsUserGenerica::consultaLogin($freshtoknRight);
            $U_suariocliente=       $get_comer->getUsuario();
            $P_asswordcliente=      $get_comer->getPassword();
            
            $_SESSION["sessiousuari"] = $U_suariocliente;
            $_SESSION["sessiopassword"] = $P_asswordcliente;

            unset($freshtokn);header('Location: perfil.php');
                    
}
           
        


    
    
    
