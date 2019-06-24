<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');

/**
 * Clase que gestiona los settings de usuario de la tienda
 * @author kadet
 *        
 */


/**
 * Settings User 
 * @author kadet
 *
 */
class SettingsUserGenerica {
   
    //defino las propiedades
    private $id_setuser;

    
    const TABLA = 'generica_settings_user'; //constante del nombre de la tabla
    //metodos getters y setters
    public function getId(){
        return $this->id_setuser;
    }
    public function getIdTienda(){
        return $this->id_tienda;
    }
    public function getUsuario(){
        return $this->usuario_cliente;
    }
    public function getPassword(){
        return $this->password_cliente;
    }
    public function getNombre(){
        return $this->nombre_cliente;
    }
    public function getApellidos(){
        return $this->apellidos_cliente;
    }
    public function getEmail(){
        return $this->email_cliente;
    }
    public function getDni(){
        return $this->dni_cliente;
    }
   
    public function setId(){
        $this->id_setuser = $id_setuser;
    }
    public function setIdTienda(){
        $this->id_tienda = $id_tienda;
    }
    public function setUsuario(){
        $this->usuario_cliente = $usuario_cliente;
    }
    public function setPassword(){
        $this->password_cliente = $password_cliente;
    }
    public function setNombre(){
        $this->nombre_cliente = $nombre_cliente;
    }
    public function setApellidos(){
        $this->apellidos_cliente = $apellidos_cliente;
    }
    public function setEmail(){
        $this->email_cliente = $email_cliente;
    }
    public function setDni(){
        $this->dni_cliente = $dni_cliente;
    }
    
    //constructor
    public function __construct($dni_cliente,$email_cliente,$apellidos_cliente,$nombre_cliente,$password_cliente,$usuario_cliente,$id_tienda,$id_setuser=null)
    {
        
        $this->id_setuser        = $id_setuser;
        $this->id_tienda        = $id_tienda;
        $this->usuario_cliente   = $usuario_cliente;
        $this->password_cliente  = $password_cliente;
        $this->nombre_cliente    = $nombre_cliente;
        $this->apellidos_cliente = $apellidos_cliente;
        $this->email_cliente     = $email_cliente;
        $this->dni_cliente       = $dni_cliente;   

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
    public function inserSettingsUserTienda(){
        
        $conexion = new Conexion();
        $conexion->exec("SET NAMES 'utf8'");
        $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (dni_cliente,email_cliente,apellidos_cliente,nombre_cliente,password_cliente,usuario_cliente,id_tienda) VALUES (:dni_cliente,:email_cliente,:apellidos_cliente,:nombre_cliente,:password_cliente,:usuario_cliente,:id_tienda)');      

        $consulta->bindParam(':id_tienda',  $this->id_tienda);
        $consulta->bindParam(':usuario_cliente',$this->usuario_cliente);
        $consulta->bindParam(':password_cliente',$this->password_cliente);
        $consulta->bindParam(':nombre_cliente',$this->nombre_cliente);
        $consulta->bindParam(':apellidos_cliente',$this->apellidos_cliente);
        $consulta->bindParam(':email_cliente',$this->email_cliente);
        $consulta->bindParam(':dni_cliente',$this->dni_cliente);
        
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
