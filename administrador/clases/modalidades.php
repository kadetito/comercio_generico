<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');

/**
 * Clase que gestiona los idiomas de la tienda
 * @author kadet
 *        
 */

class Modalidades {
    
    //defino las propiedades
    private $id_modali;
    
    const TABLA = 'definicion_modalidades'; //constante del nombre de la tabla

    //metodos getters y setters
    public function getId(){
        return $this->id_modali;
    }
    public function getNombre(){
        return $this->nombre_modalidad;
    }

  
    public function setId(){
        $this->id_modali = $id_modali;
    }
    public function setNombre(){
        $this->nombre_modalidad = $nombre_modalidad;
    }

    
    //constructor
    public function __construct($nombre_modalidad,$id_modali=null)
    {
        $this->id_modali = $id_modali;
        $this->nombre_modalidad = $nombre_modalidad;

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
                          ORDER BY id_modali ASC
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
    public static function consultaDetalle($idrequest){
        $conexion = new conexion();
        $conexion->exec("SET NAMES 'utf8'");
        $consulta = $conexion->prepare("SELECT * FROM " . self::TABLA . " WHERE id_cate = :id_cate ");
        $consulta->execute(array(':id_cate' => $idrequest));
        $registro = $consulta->fetch();
        if($registro){
            return new self($registro['alias_categoria'],$registro['descripcion_categoria'],$registro['tags_categoria'],$registro['nombre_categoria'],$idrequest);
        } else {
            return false;
        }
    }
    
    
    //**----------------------------
    // UPDATE TOTAL
    // actualiza todo el registro
    //**---------------------
    
    public static function updateTotalRegistro($setCateAlias,$tagsSetCategoria,$setDesAlias,$setCateTitulo,$setId_cate){
        function limpiaEspacios($cadena){
            $cadena = str_replace(' ', '', $cadena);
            return strtolower($cadena);
        }
        $conexion = new Conexion();
        $conexion->exec("SET NAMES 'utf8'");
        $setCateTituloParseado = limpiaEspacios($setCateTitulo);
        $setCateTituloFiltrado = filtrourl($setCateTituloParseado);
        $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET
                    nombre_categoria  = :setCateTitulo,
                    alias_categoria  = :setCateAlias,
                    descripcion_categoria = :tagsSetCategoria,
                    tags_categoria = :setDesAlias
                       WHERE id_cate = :setId_cate');
        $consulta->bindParam(':setCateTitulo',$setCateTitulo);
        if(isset($setCateAlias)){
            $consulta->bindParam(':setCateAlias', $setCateTituloFiltrado);
        } else {
            $consulta->bindParam(':setCateAlias', $setCateAlias);
        }
        $consulta->bindParam(':setDesAlias', $setDesAlias);
        $consulta->bindParam(':tagsSetCategoria', $tagsSetCategoria);
        $consulta->bindParam(':setId_cate', $setId_cate);
        $consulta->execute();
        $conexion = null; //cierro conexion
    }
    
    
    
    //**----------------------------
    // INSERT TOTAL
    // inserta todo el registro
    //**---------------------
    public function inserTotalRegistro(){
        
        $conexion = new Conexion();
        $conexion->exec("SET NAMES 'utf8'");
        $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (alias_categoria,descripcion_categoria,tags_categoria,nombre_categoria) VALUES (:alias_categoria,:descripcion_categoria,:tags_categoria,:nombre_categoria)');
        
        $consulta->bindParam(':alias_categoria',  $this->alias_categoria);
        $consulta->bindParam(':descripcion_categoria', $this->descripcion_categoria);
        $consulta->bindParam(':tags_categoria',  $this->tags_categoria);
        $consulta->bindParam(':nombre_categoria',$this->nombre_categoria);
        
        $consulta->execute();
        $this->id= $conexion->lastInsertId();
    }
    
    
    
    public function eliminarRegistroCat($id_cate){
        //                echo '<script>alert("hola")</script>';
        $conexion = new Conexion();
        if($id_cate) {
            $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA .'  WHERE id_cate = :id_cate');
            $consulta->bindParam(':id_cate', $id_cate);
            $consulta->execute();
        }
        $conexion = null; //cierro conexion
    }
    
    
    
}


/**
 * Tipos pago Generica
 * @author kadet
 *
 */
class ModalidadesGenerica {
    
    //defino las propiedades
    private $id_moda;
    
    const TABLA = 'generica_modalidades'; //constante del nombre de la tabla
    //metodos getters y setters
    public function getId(){
        return $this->id_moda;
    }
    public function getTipago(){
        return $this->id_modali;
    }
    
    public function getIdTienda(){
        return $this->id_tienda;
    }
    
    public function setId(){
        $this->id_moda = $id_moda;
    }
    public function setTipago(){
        $this->id_modali = $id_modali;
    }
    
    public function setIdTienda(){
        $this->id_tienda = $id_tienda;
    }
    
    
    
    //constructor
    public function __construct($id_tienda,$id_modali,$id_moda=null)
    {
        $this->id_moda = $id_moda;
        $this->id_modali = $id_modali;
        $this->id_tienda = $id_tienda;
        
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
                          ORDER BY id_locale ASC
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
    public static function consultaDetalle($idrequest){
        $conexion = new conexion();
        $conexion->exec("SET NAMES 'utf8'");
        $consulta = $conexion->prepare("SELECT * FROM " . self::TABLA . " WHERE id_cate = :id_cate ");
        $consulta->execute(array(':id_cate' => $idrequest));
        $registro = $consulta->fetch();
        if($registro){
            return new self($registro['alias_categoria'],$registro['descripcion_categoria'],$registro['tags_categoria'],$registro['nombre_categoria'],$idrequest);
        } else {
            return false;
        }
    }
    
    
    //**----------------------------
    // UPDATE TOTAL
    // actualiza todo el registro
    //**---------------------
    
    public static function updateTotalRegistro($setCateAlias,$tagsSetCategoria,$setDesAlias,$setCateTitulo,$setId_cate){
        function limpiaEspacios($cadena){
            $cadena = str_replace(' ', '', $cadena);
            return strtolower($cadena);
        }
        $conexion = new Conexion();
        $conexion->exec("SET NAMES 'utf8'");
        $setCateTituloParseado = limpiaEspacios($setCateTitulo);
        $setCateTituloFiltrado = filtrourl($setCateTituloParseado);
        $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET
                    nombre_categoria  = :setCateTitulo,
                    alias_categoria  = :setCateAlias,
                    descripcion_categoria = :tagsSetCategoria,
                    tags_categoria = :setDesAlias
                       WHERE id_cate = :setId_cate');
        $consulta->bindParam(':setCateTitulo',$setCateTitulo);
        if(isset($setCateAlias)){
            $consulta->bindParam(':setCateAlias', $setCateTituloFiltrado);
        } else {
            $consulta->bindParam(':setCateAlias', $setCateAlias);
        }
        $consulta->bindParam(':setDesAlias', $setDesAlias);
        $consulta->bindParam(':tagsSetCategoria', $tagsSetCategoria);
        $consulta->bindParam(':setId_cate', $setId_cate);
        $consulta->execute();
        $conexion = null; //cierro conexion
    }
    
    
    
    //**----------------------------
    // INSERT TOTAL
    // inserta todo el registro
    //**---------------------
    public function inserModalidadesTienda(){
        
        $conexion = new Conexion();
        $conexion->exec("SET NAMES 'utf8'");
        $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (id_tienda,id_modali) VALUES (:id_tienda,:id_modali)');
        $consulta->bindParam(':id_tienda',  $this->id_tienda);
        $consulta->bindParam(':id_modali',  $this->id_modali);
        $consulta->execute();
        $this->id= $conexion->lastInsertId();
        
        
        
    }
    
    
    public function eliminarRegistroCat($id_cate){
        //                echo '<script>alert("hola")</script>';
        $conexion = new Conexion();
        if($id_cate) {
            $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA .'  WHERE id_cate = :id_cate');
            $consulta->bindParam(':id_cate', $id_cate);
            $consulta->execute();
        }
        $conexion = null; //cierro conexion
    }
    
    
    
}





class ModalidadesJoined {
    
    //defino las propiedades
    private $id_modali;
    
    const TABLA = 'definicion_modalidades'; //constante del nombre de la tabla
    
    //metodos getters y setters
    public function getId(){
        return $this->id_modali;
    }
    public function getNombre(){
        return $this->nombre_modalidad;
    }
    
    
    public function setId(){
        $this->id_modali = $id_modali;
    }
    public function setNombre(){
        $this->nombre_modalidad = $nombre_modalidad;
    }
    
    
    //constructor
    public function __construct($nombre_modalidad,$id_modali=null)
    {
        $this->id_modali = $id_modali;
        $this->nombre_modalidad = $nombre_modalidad;
        
    }
    
    /**
     * CONSULTA SIN FORMATO
     * 
     * @return number[]
     */
    public static function consultaSinFormatoSelectIdTienda($idTienda){
        $conexion = new conexion();//objeto conexion
        $conexion->exec("SET NAMES 'utf8'");
        $consulta = $conexion->prepare("

SELECT DISTINCT B.id_modali,* FROM definicion_modalidades A
								INNER JOIN generica_modalidades B ON B.id_modali=A.id_modali
								WHERE B.id_tienda != :idTienda;


                          ");//uso la constante TABLA
        $consulta->bindParam(':idTienda',$idTienda);
        $consulta->execute();
        $registros = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
        return [ $registros ];
    }
    
    
    
    
    
    
    
}

