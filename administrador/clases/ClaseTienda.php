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

class ClaseTienda {
    
    //defino las propiedades
    private $id_tienda;

    public function getIdTienda(){
        return $this->id_tienda;
    }
    public function getNombreTienda(){
        return $this->tienda_nombre;
    }
    public function getTipoTienda(){
        return $this->nombre_tipotienda;
    }
    public function getNomCliente(){
        return $this->nombre_cliente;
    }
    public function getApeCliente(){
        return $this->apellidos_cliente;
    }
    public function getDNICliente(){
        return $this->dni_cliente;
    }
    public function getEmailcliente(){
        return $this->email_cliente;
    }
    public function getUsuariocliente(){
        return $this->usuario_cliente;
    }
    public function getPasswordcliente(){
        return $this->password_cliente;
    }
    public function getFechaalta(){
        return $this->fecha_alta;
    }
    public function getNombretipotienda(){
        return $this->nombre_tipotienda;
    }
    public function getDominio(){
        return $this->dominio;
    }
    public function getFriendly(){
        return $this->friendly;
    }
    public function getProtocolopreferente(){
        return $this->protocolo_preferente;
    }
    public function getRutaservidor(){
        return $this->ruta_servidor;
    }
    public function getUsowww(){
        return $this->usowww;
    }
    public function getNombreestructura(){
        return $this->nombre_estructura;
    }
    public function getNombreestil(){
        return  $this->nombre_estil;
    }
    
    
    public function setIdTienda(){
        $this->id_tienda = $id_tienda;
    }
    public function setNombreTienda(){
        $this->tienda_nombre = $tienda_nombre;
    }
    public function setTipoTienda(){
        $this->nombre_tipotienda = $nombre_tipotienda;
    }
    public function setNomCliente(){
        $this->nombre_cliente = $nombre_cliente;
    }
    public function setApeCliente(){
        $this->apellidos_cliente = $apellidos_cliente;
    }
    public function setDNICliente(){
        $this->dni_cliente = $dni_cliente;
    }
    public function setEmailcliente(){
        $this->email_cliente=$email_cliente;
    }
    public function setUsuariocliente(){
        $this->usuario_cliente=$usuario_cliente;
    }
    public function setPasswordcliente(){
        $this->password_cliente=$password_cliente;
    }
    public function setFechaalta(){
        $this->fecha_alta=$fecha_alta;
    }
    public function setNombretipotienda(){
        $this->nombre_tipotienda=$nombre_tipotienda;
    }
    public function setDominio(){
        $this->dominio=$dominio;
    }
    public function setFriendly(){
        $this->friendly=$friendly;
    }
    public function setProtocolopreferente(){
        $this->protocolo_preferente=$protocolo_preferente;
    }
    public function setRutaservidor(){
        $this->ruta_servidor=$ruta_servidor;
    }
    public function setUsowww(){
        $this->usowww=$usowww;
    }
    public function setNombreestructura(){
        $this->nombre_estructura=$nombre_estructura;
    }
    public function setNombreestil(){
        $this->nombre_estil=$nombre_estil;
    }

    
    //constructor
    public function __construct($nombre_estil,$nombre_estructura,$usowww,$ruta_servidor,$protocolo_preferente,$friendly,$dominio,$nombre_tipotienda,$fecha_alta,$password_cliente,$usuario_cliente,$email_cliente,$dni_cliente,$apellidos_cliente,$nombre_cliente,$nombre_tipotienda,$tienda_nombre,$id_tienda=null)
    {
        $this->id_tienda = $id_tienda;
        $this->tienda_nombre = $tienda_nombre;
        $this->nombre_tipotienda = $nombre_tipotienda;
        $this->nombre_cliente = $nombre_cliente;
        $this->apellidos_cliente = $apellidos_cliente;
        $this->dni_cliente = $dni_cliente;
        $this->email_cliente        = $email_cliente;
        $this->usuario_cliente      = $usuario_cliente;
        $this->password_cliente     = $password_cliente;
        $this->fecha_alta           = $fecha_alta;
        $this->nombre_tipotienda    = $nombre_tipotienda;
        $this->dominio              = $dominio;
        $this->friendly             = $friendly;
        $this->protocolo_preferente = $protocolo_preferente;
        $this->ruta_servidor        = $ruta_servidor;
        $this->usowww               = $usowww;
        $this->nombre_estructura    = $nombre_estructura;
        $this->nombre_estil         = $nombre_estil;
    }
    

    
    
    /**
    * OBTENER DETALLE
    * obtiene el detalle del registro pedido por url get
    */
    public static function consultaDetalle($idTienda){
        $conexion = new conexion();
        $conexion->exec("SET NAMES 'utf8'");
        $consulta = $conexion->prepare("SELECT
                        A.id_tienda,A.tienda_nombre,B.nombre_cliente,B.apellidos_cliente,B.dni_cliente,B.email_cliente,B.usuario_cliente,B.password_cliente,D.fecha_alta,A.id_tipotienda,AA.nombre_tipotienda
                        ,D.dominio,D.friendly,D.protocolo_preferente,D.ruta_servidor,D.usowww,EE.nombre_estructura,FF.nombre_estil
                        FROM generica_tienda A
                        LEFT JOIN definicion_tipotienda AA on AA.id_tipotienda=A.id_tipotienda
                        INNER JOIN generica_settings_user B on B.id_tienda=A.id_tienda
                        INNER JOIN generica_hostrouting D on D.id_tienda=A.id_tienda
                        INNER JOIN generica_estructura E on E.id_tienda=A.id_tienda
                        LEFT JOIN definicion_estructura EE on EE.id_estruc=E.id_estruc
                        INNER JOIN generica_estilos F on F.id_estr_fk=E.id_estruc AND F.id_tienda = A.id_tienda
                        LEFT JOIN definicion_estilos FF on FF.id_estil=F.id_estil 
                        WHERE A.id_tienda= :id_tienda"
            );
        $consulta->execute(array(':id_tienda' => $idTienda));
        $registro = $consulta->fetch();
        if($registro){
            return new self(
                $registro['nombre_estil'],
                $registro['nombre_estructura'],
                $registro['usowww'],
                $registro['ruta_servidor'],
                $registro['protocolo_preferente'],
                $registro['friendly'],
                $registro['dominio'],
                $registro['nombre_tipotienda'],
                $registro['fecha_alta'],
                $registro['password_cliente'],
                $registro['usuario_cliente'],
                $registro['email_cliente'],
                $registro['dni_cliente'],
                $registro['apellidos_cliente'],
                $registro['nombre_cliente'],
                $registro['nombre_tipotienda'],
                $registro['tienda_nombre'],
                $idTienda);
            
            ChromePhp::log("hhhhh");
            ChromePhp::log($idTienda);
        } else {

//                 throw new Exception('Error en prepare: ' . $registro->error);
       
            return false;
        }
    }
    
    /**
     * obtener nombres de usuario
     */

        public static function consultaUsers($nombre_cliente){
            $conexion = new conexion();
            $conexion->exec("SET NAMES 'utf8'");
            $consulta = $conexion->prepare("SELECT * FROM generica_tienda WHERE nombre_cliente= :nombre_cliente"
                );
            $consulta->execute(array(':nombre_cliente' => $nombre_cliente));
            $registro = $consulta->fetch();
            if($registro){
                return new self(
               
                    $registro['password_cliente'],
                    $registro['usuario_cliente'],
                    $registro['email_cliente'],
                    $registro['dni_cliente'],
                    $registro['apellidos_cliente'],
                    $registro['nombre_cliente'],
                    $idTienda);
            } else {
                return false;
            }
        }
    
        /**
         * obtener bucle de idiomas
         */
            public static function consultaIdiomas($idTienda){
            $conexion = new conexion();//objeto conexion
            $conexion->exec("SET NAMES 'utf8'");
            $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM generica_idiomas A 
            INNER JOIN definicion_idiomas B on A.id_locale=B.id_locale 
            WHERE id_tienda = :id_tienda ORDER BY id_idioma ASC ");
            $consulta->execute(array(':id_tienda' => $idTienda));
            $consulta->execute();
            $registros = $consulta->fetchAll(PDO::FETCH_ASSOC);
            $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
            return [$registros];
        }

        /**
         * obtener bucle de formas de pago
         */
        public static function consultaPagos($idTienda){
            $conexion = new conexion();//objeto conexion
            $conexion->exec("SET NAMES 'utf8'");
            $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM generica_tipospago A
            INNER JOIN definicion_tipospago B on A.id_tipago=B.id_tipago
            WHERE id_tienda = :id_tienda ORDER BY id_tipospago ASC ");
            $consulta->execute(array(':id_tienda' => $idTienda));
            $consulta->execute();
            $registros = $consulta->fetchAll(PDO::FETCH_ASSOC);
            $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
            return [$registros];
        }
        
        /**
         * obtener bucle de modalidades usadas
         */
        public static function consultaModalidades($idTienda){
            $conexion = new conexion();//objeto conexion
            $conexion->exec("SET NAMES 'utf8'");
            $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM generica_modalidades A
            INNER JOIN definicion_modalidades B on A.id_modali=B.id_modali
            WHERE id_tienda = :id_tienda ORDER BY id_moda ASC ");
            $consulta->execute(array(':id_tienda' => $idTienda));
            $consulta->execute();
            $registros = $consulta->fetchAll(PDO::FETCH_ASSOC);
            $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
            return [$registros];
        }
        
}
