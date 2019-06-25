<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');

/**
 * Clase que gestiona las estructuras de la tienda
 * @author kadet
 *        
 */

class Estilos {
    
    //defino las propiedades
    private $id_estil;
    
    const TABLA = 'definicion_estilos'; //constante del nombre de la tabla

    //metodos getters y setters
    public function getId(){
        return $this->id_estil;
    }
    public function getNombre(){
        return $this->nombre_estil;
    }
    public function getIdFk(){
        return $this->id_estr_fk;
    }
    
    public function getImagen(){
        return $this->imagen_estil;
    }
    
    public function setId(){
        $this->id_estil = $id_estil;
    }
    public function setNombre(){
        $this->nombre_estil = $nombre_estil;
    }
    public function setIdFk(){
        $this->id_estr_fk = $id_estr_fk;
    }
    public function setImagen(){
        $this->imagen_estil = $imagen_estil;
    }
    //constructor
    public function __construct($imagen_estil,$id_estr_fk,$nombre_estil,$id_estil=null)
    {
        $this->id_estil = $id_estil;
        $this->nombre_estil = $nombre_estil;
        $this->id_estr_fk = $id_estr_fk;
        $this->imagen_estil = $imagen_estil;
    }
    
    
    /**
     * CONSULTA SIN FORMATO
     * devuelve los registros sin formato HTML ni paginador
     * @return number[]
     */
    public static function consultaSinFormato($idEstructuraInstant){
        $conexion = new conexion();//objeto conexion
        $conexion->exec("SET NAMES 'utf8'");
        $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " WHERE id_estr_fk = :idEstructuraInstant
                          ORDER BY id_estr_fk ASC
                          ");//uso la constante TABLA
        
        $consulta->bindParam(':idEstructuraInstant',$idEstructuraInstant);
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
