<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');

/**
 * Clase que gestiona la edicion de usuarios. CRUD
 * @author kadet
 *
 */

class ClaseUpdateUsuarios {
    
    //defino las propiedades
    private $id_setuser;
//     private $usuario_cliente;
    public function getIdsetuserS(){
        return $this->id_setuser;
    }
    
//     public function getIdTiendaS(){
//         return $this->id_tienda;
//     }
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
//     public function setIdTiendaS(){
//         $this->id_tienda = $id_tienda;
//     }
    
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
    public function __construct($password_cliente,$usuario_cliente,$email_cliente,$dni_cliente,$apellidos_cliente,$nombre_cliente,$id_setuser=null)
    {
        $this->id_setuser = $id_setuser;
//         $this->id_tienda = $id_tienda;
        $this->nombre_cliente = $nombre_cliente;
        $this->apellidos_cliente = $apellidos_cliente;
        $this->dni_cliente = $dni_cliente;
        $this->email_cliente        = $email_cliente;
        $this->usuario_cliente      = $usuario_cliente;
        $this->password_cliente     = $password_cliente;
        
    }


        
        /**
         *
         *
         */
    

    public static function updateRegistroUsuario($password_cliente,$usuario_cliente,$email_cliente,$dni_cliente,$apellidos_cliente,$nombre_cliente,$id_setuser){
            $conexion = new Conexion();
            $conexion->exec("SET NAMES 'utf8'");
            $consulta = $conexion->prepare('UPDATE generica_settings_user SET
                    nombre_cliente  = :nombre_cliente,
                    apellidos_cliente  = :apellidos_cliente,
                    dni_cliente  = :dni_cliente,
                    email_cliente  = :email_cliente,
                    usuario_cliente  = :usuario_cliente,
                    password_cliente  = :password_cliente
                       WHERE id_setuser = :id_setuser');

            $consulta->bindParam(':password_cliente', $password_cliente);
            $consulta->bindParam(':usuario_cliente', $usuario_cliente);
            $consulta->bindParam(':email_cliente', $email_cliente);
            $consulta->bindParam(':dni_cliente', $dni_cliente);
            $consulta->bindParam(':apellidos_cliente', $apellidos_cliente);
            $consulta->bindParam(':nombre_cliente', $nombre_cliente);
            $consulta->bindParam(':id_setuser', $id_setuser);
           
            ChromePhp::log($password_cliente);
            ChromePhp::log($usuario_cliente);
            ChromePhp::log($email_cliente);
            ChromePhp::log($dni_cliente);
            ChromePhp::log($apellidos_cliente);
            ChromePhp::log($nombre_cliente);
            ChromePhp::log($id_setuser);
            
            $consulta->execute();
            $conexion = null; //cierro conexion
        }
        
        
}
