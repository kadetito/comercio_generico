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

class ClaseGetUsuario {
    
    //defino las propiedades
    private $id_setuser;
    
    public function getIdsetuserS(){
        return $this->id_setuser;
    }
    
    public function getIdTiendaS(){
        return $this->id_tienda;
    }
    public function getNomClienteS(){
        return $this->nombre_cliente;
    }
    public function getApeClienteS(){
        return $this->apellidos_cliente;
    }
    public function getDNIClienteS(){
        return $this->dni_cliente;
    }
    public function getEmailclienteS(){
        return $this->email_cliente;
    }
    public function getUsuarioclienteS(){
        return $this->usuario_cliente;
    }
    public function getPasswordclienteS(){
        return $this->password_cliente;
    }
    
  
    
    public function setIdsetuserS(){
        $this->id_setuser = $id_setuser;
    }
    public function setIdTiendaS(){
        $this->id_tienda = $id_tienda;
    }
 
    public function setNomClienteS(){
        $this->nombre_cliente = $nombre_cliente;
    }
    public function setApeClienteS(){
        $this->apellidos_cliente = $apellidos_cliente;
    }
    public function setDNIClienteS(){
        $this->dni_cliente = $dni_cliente;
    }
    public function setEmailclienteS(){
        $this->email_cliente=$email_cliente;
    }
    public function setUsuarioclienteS(){
        $this->usuario_cliente=$usuario_cliente;
    }
    public function setPasswordclienteS(){
        $this->password_cliente=$password_cliente;
    }
 

    
    //constructor
    public function __construct($password_cliente,$usuario_cliente,$email_cliente,$dni_cliente,$apellidos_cliente,$nombre_cliente,$id_tienda,$id_setuser=null)
    {
        $this->id_setuser = $id_setuser;
        $this->id_tienda = $id_tienda;
        $this->nombre_cliente = $nombre_cliente;
        $this->apellidos_cliente = $apellidos_cliente;
        $this->dni_cliente = $dni_cliente;
        $this->email_cliente        = $email_cliente;
        $this->usuario_cliente      = $usuario_cliente;
        $this->password_cliente     = $password_cliente;
        
    }

    /**
     * obtener nombres de usuario
     */

    public static function consultaUsers($nombr_client){   
        
            $conexion = new conexion();
            $conexion->exec("SET NAMES 'utf8'");
            $consulta = $conexion->prepare("SELECT * FROM generica_settings_user WHERE usuario_cliente= :usuario_cliente "
                );
            $consulta->execute(array(':usuario_cliente' => $nombr_client));
            $registro = $consulta->fetch();
            if($registro){
                return new self(
                    $registro['password_cliente'],
                    $registro['usuario_cliente'],
                    $registro['email_cliente'],
                    $registro['dni_cliente'],
                    $registro['apellidos_cliente'],
                    $registro['nombre_cliente'],
                    $registro['id_tienda'],
                    $registro['id_setuser']
                    );
//                 ChromePhp::log($registro['usuario_cliente']);
            } else {
                return false;
            }
        }
    
}
