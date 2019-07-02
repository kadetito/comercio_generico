<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');

/**
 * Clase que gestiona la tienda
 * @author kadet
 *
 */

class ClaseEliminar {
    
    //defino las propiedades
    private $id_tienda;

    public function getIdTienda(){
        return $this->id_tienda;
    }

    public function setIdTienda(){
        $this->id_tienda = $id_tienda;
    }
   
    
    //constructor
    public function __construct($id_tienda=null)
    {
        $this->id_tienda = $id_tienda;
   
    }

/**
 * 
 * 
 */    
//     public function eliminarRegistro($id_tienda){
    public static function eliminarRegistro($id_tienda){
        ChromePhp::log($id_tienda);
        $conexion = new Conexion();

        
        $sql = "DELETE FROM generica_tienda WHERE id_tienda = ?";
        $conexion->prepare($sql)->execute([$id_tienda]);
        
        $sql = "DELETE FROM generica_estructura WHERE id_tienda = ?";
        $conexion->prepare($sql)->execute([$id_tienda]);
        
        $sql = "DELETE FROM generica_estilos WHERE id_tienda = ?";
        $conexion->prepare($sql)->execute([$id_tienda]);
        
        $sql = "DELETE FROM generica_settings_user WHERE id_tienda = ?";
        $conexion->prepare($sql)->execute([$id_tienda]);
        
        $sql = "DELETE FROM generica_tipospago WHERE id_tienda = ?";
        $conexion->prepare($sql)->execute([$id_tienda]);
        
        $sql = "DELETE FROM generica_idiomas WHERE id_tienda = ?";
        $conexion->prepare($sql)->execute([$id_tienda]);

        $sql = "DELETE FROM generica_modalidades WHERE id_tienda = ?";
        $conexion->prepare($sql)->execute([$id_tienda]);

        $sql = "DELETE FROM generica_hostrouting WHERE id_tienda = ?";
        $conexion->prepare($sql)->execute([$id_tienda]);
        
    }
    
        
}
