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

class ClaseUpdate {
    
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
        public static function updateRegistro($id_tienda){
//             ChromePhp::log($id_tienda);
            $conexion = new Conexion();
            $conexion->exec("SET NAMES 'utf8'");
           
            $consulta = $conexion->prepare('UPDATE generica_tienda SET
                    tienda_activa  = "S"
                       WHERE id_tienda = :id_tienda');

            $consulta->bindParam(':id_tienda', $id_tienda);
            $consulta->execute();
            $conexion = null; //cierro conexion
        }
        
        /**
         *
         *
         */
        public static function updateRegistroUsuario($id_tienda){
            //             ChromePhp::log($id_tienda);
            $conexion = new Conexion();
            $conexion->exec("SET NAMES 'utf8'");
            
            $consulta = $conexion->prepare('UPDATE generica_tienda SET
                    tienda_activa  = "S"
                       WHERE id_tienda = :id_tienda');
            
            $consulta->bindParam(':id_tienda', $id_tienda);
            $consulta->execute();
            $conexion = null; //cierro conexion
        }
        
        
}
