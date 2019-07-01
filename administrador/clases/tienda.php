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

class Tienda {
    
    //defino las propiedades
    private $id_tienda;

    const TABLA = 'generica_tienda'; //constante del nombre de la tabla
    
    //metodos getters y setters
    public function getIdTienda(){
        return $this->id_tienda;
    }
    public function getNombreTienda(){
        return $this->tienda_nombre;
    }
    public function getTipoTiendaTienda(){
        return $this->id_tipotienda;
    }
    
    public function setIdTienda(){
        $this->id_tienda = $id_tienda;
    }
    public function setNombreTienda(){
        $this->tienda_nombre = $tienda_nombre;
    }
    public function setTipoTiendaTienda(){
        $this->id_tipotienda = $id_tipotienda;
    }
    
    
    //constructor
    public function __construct($id_tipotienda,$tienda_nombre,$id_tienda=null)
    {
        $this->id_tienda = $id_tienda;
        $this->id_tipotienda = $id_tipotienda;
        $this->tienda_nombre = $tienda_nombre;
    }
    
    
    /**
     * CONSULTA SIN FORMATO
     * devuelve los registros sin formato HTML ni paginador
     * @return number[]
     */
    public static function consultaSinFormato(){
        $conexion = new conexion();//objeto conexion
        $conexion->exec("SET NAMES 'utf8'");
        $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . "
                          ORDER BY id_tienda ASC
                          ");//uso la constante TABLA
        $consulta->execute();
        $registros = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
        return [ $registros ];
    }
    
    
    
    //**
    // OBTENER DETALLE
    // obtiene el detalle del registro pedido por url get
    //**
    public static function consultaDetalle($idTienda){
        $conexion = new conexion();
        $conexion->exec("SET NAMES 'utf8'");
        $consulta = $conexion->prepare("SELECT * FROM " . self::TABLA . " WHERE id_tienda = :id_tienda ");
        $consulta->execute(array(':id_tienda' => $idTienda));
        $registro = $consulta->fetch();
        if($registro){
            return new self($registro['id_tipotienda'],$registro['tienda_nombre'],$idTienda);
        } else {
            return false;
        }
    }
    
    
//     //**----------------------------
//     // UPDATE TOTAL
//     // actualiza todo el registro
//     //**---------------------
    
//     public static function updateTotalRegistro($setCateAlias,$tagsSetCategoria,$setDesAlias,$setCateTitulo,$setId_cate){
//         function limpiaEspacios($cadena){
//             $cadena = str_replace(' ', '', $cadena);
//             return strtolower($cadena);
//         }
//         $conexion = new Conexion();
//         $conexion->exec("SET NAMES 'utf8'");
//         $setCateTituloParseado = limpiaEspacios($setCateTitulo);
//         $setCateTituloFiltrado = filtrourl($setCateTituloParseado);
//         $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET
//                     nombre_categoria  = :setCateTitulo,
//                     alias_categoria  = :setCateAlias,
//                     descripcion_categoria = :tagsSetCategoria,
//                     tags_categoria = :setDesAlias
//                        WHERE id_cate = :setId_cate');
//         $consulta->bindParam(':setCateTitulo',$setCateTitulo);
//         if(isset($setCateAlias)){
//             $consulta->bindParam(':setCateAlias', $setCateTituloFiltrado);
//         } else {
//             $consulta->bindParam(':setCateAlias', $setCateAlias);
//         }
//         $consulta->bindParam(':setDesAlias', $setDesAlias);
//         $consulta->bindParam(':tagsSetCategoria', $tagsSetCategoria);
//         $consulta->bindParam(':setId_cate', $setId_cate);
//         $consulta->execute();
//         $conexion = null; //cierro conexion
//     }
    
    
    
    //**----------------------------
    // INSERT TOTAL
    // inserta todo el registro
    //**---------------------
    public function inserTotalTienda(){
        
        $conexion = new Conexion();
        $conexion->exec("SET NAMES 'utf8'");
        $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (id_tipotienda,tienda_nombre) VALUES (:id_tipotienda,:tienda_nombre)');     
        $consulta->bindParam(':id_tipotienda', $this->id_tipotienda);
        $consulta->bindParam(':tienda_nombre',  $this->tienda_nombre);        
        $consulta->execute();
        
        $this->id_tienda= $conexion->lastInsertId();        
        //devuelvo el ID del registro
        $registros = $conexion->lastInsertId();        
        return $registros;
        
    }
    

    

  
    
//     public function eliminarRegistroCat($id_cate){
//         //                echo '<script>alert("hola")</script>';
//         $conexion = new Conexion();
//         if($id_cate) {
//             $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA .'  WHERE id_cate = :id_cate');
//             $consulta->bindParam(':id_cate', $id_cate);
//             $consulta->execute();
//         }
//         $conexion = null; //cierro conexion
//     }
    
    
    
}
