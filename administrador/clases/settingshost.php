<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');

/**
 * Clase que gestiona los settings de host de la tienda
 * @author kadet
 *        
 */


/**
 * Settings Host
 * @author kadet
 *
 */
class SettingsHostGenerica {
   
    //defino las propiedades
    private $id_hostrouting;

    
    const TABLA = 'generica_hostrouting'; //constante del nombre de la tabla
    
    //metodos getters y setters
    public function getId(){
        return $this->id_hostrouting;
    }
    public function getIdTienda(){
        return $this->id_tienda;
    }
    public function getDominio(){
        return $this->dominio;
    }
//     public function getRutaServidor(){
//         return $this->ruta_servidor;
//     }
//     public function getNombre(){
//         return $this->nombre;
//     }
    public function getProtocolo(){
        return $this->protocolo_preferente;
    }
    public function getFriendly(){
        return $this->friendly;
    }
    public function getUsowww(){
        return $this->usowww;
    }
    public function getFechaAlta(){
        return $this->fecha_alta;
    }
    
   
    
    
    public function setId(){
        $this->id_hostrouting = $id_hostrouting;
    }
    public function setIdTienda(){
        $this->id_tienda = $id_tienda;
    }
    public function setDominio(){
        $this->dominio = $dominio;
    }
//     public function setRutaServidor(){
//         $this->ruta_servidor = $ruta_servidor;
//     }
//     public function setNombre(){
//         $this->nombre = $nombre;
//     }
    public function setProtocolo(){
        $this->protocolo_preferente = $protocolo_preferente;
    }
    public function setFriendly(){
        $this->friendly = $friendly;
    }
    public function setUsowww(){
        $this->usowww = $usowww;
    }
    public function setFechaAlta(){
        $this->fecha_alta = $fecha_alta;
    }
    
    //constructor
    public function __construct($fecha_alta,$usowww,$friendly,$protocolo_preferente,$dominio,$id_tienda,$id_hostrouting=null)
    {      
        $this->fecha_alta              =  $fecha_alta;
        $this->usowww                  =  $usowww;
        $this->friendly                =  $friendly;
        $this->protocolo_preferente    =  $protocolo_preferente;
//         $this->nombre                  =  $nombre;
//         $this->ruta_servidor           =  $ruta_servidor;
        $this->dominio                 =  $dominio;
        $this->id_tienda               =  $id_tienda;
        $this->id_hostrouting          =  $id_hostrouting;    
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
    public function inserSettingsHostTienda(){
        
        $conexion = new Conexion();
        $conexion->exec("SET NAMES 'utf8'");
        $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (fecha_alta,usowww,friendly,protocolo_preferente,dominio,id_tienda) VALUES (:fecha_alta,:usowww,:friendly,:protocolo_preferente,:dominio,:id_tienda)');      

        $consulta->bindParam(':fecha_alta',$this->fecha_alta);
        $consulta->bindParam(':usowww',$this->usowww);
        $consulta->bindParam(':friendly',$this->friendly);
        $consulta->bindParam(':protocolo_preferente',$this->protocolo_preferente);
//         $consulta->bindParam(':nombre',$this->nombre);
//         $consulta->bindParam(':ruta_servidor',$this->ruta_servidor);
        $consulta->bindParam(':dominio',$this->dominio);
        $consulta->bindParam(':id_tienda',$this->id_tienda);
        
//         ChromePhp::log($this->dominio);

        echo '<script>alert("'.$this->dominio.'")</script>';
        
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
