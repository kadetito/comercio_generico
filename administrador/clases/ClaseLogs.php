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

class ClaseLogs {
    
    //defino las propiedades
    private $id_log;

    const TABLA = 'generica_logs'; //constante del nombre de la tabla
    
    //metodos getters y setters
    public function getIdLog(){
        return $this->id_log;
    }
    public function getIdTienda(){
        return $this->id_tienda;
    }
    public function getNombreTienda(){
        return $this->tienda_nombre;
    }
    public function getFechaLog(){
        return $this->fecha_log;
    }
    public function getDescripcion(){
        return $this->descripcion_log;
    }
    
    public function setIdLog(){
        $this->id_log = $id_log;
    }
    public function setIdTienda(){
        $this->id_tienda = $id_tienda;
    }
    public function setNombreTienda(){
        $this->tienda_nombre = $tienda_nombre;
    }
    public function setFechaLog(){
        $this->fecha_log = $fecha_log;
    }
    public function setDescripcion(){
        $this->descripcion_log = $descripcion_log;
    }
    
    

    
    //constructor
    public function __construct($descripcion_log,$fecha_log,$tienda_nombre,$id_tienda,$id_log=null)
    {
        $this->id_log = $id_log;
        $this->id_tienda = $id_tienda;
        $this->tienda_nombre = $tienda_nombre;
        $this->fecha_log = $fecha_log;
        $this->descripcion_log = $descripcion_log;
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
    
    public function insertLog(){
        try {
            
        $conexion = new Conexion();
        $conexion->exec("SET NAMES 'utf8'");
        $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (descripcion_log,fecha_log,tienda_nombre,id_tienda) VALUES (:descripcion_log,:fecha_log,:tienda_nombre,:id_tienda)');
        $consulta->bindParam(':id_tienda',  $this->id_tien);
        $consulta->bindParam(':tienda_nombre',  $this->tienda_nombre);
        $consulta->bindParam(':fecha_log',  $this->fecha_log);
        $consulta->bindParam(':descripcion_log',  $this->descripcion_log);
        
        ChromePhp::log($this->id_tien);
        ChromePhp::log($this->tienda_nombre);
        ChromePhp::log($this->fecha_log);
        ChromePhp::log($this->descripcion_log);
        
        $consulta->execute();
        $this->id_log= $conexion->lastInsertId();
        echo "Successfully added the new user ";
        } catch (PDOException $e) {
            echo "DataBase Error: The user could not be added.<br>".$e->getMessage();
        } catch (Exception $e) {
            echo "General Error: The user could not be added.<br>".$e->getMessage();
        }
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
