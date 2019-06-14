<?php 
/**
 * Conexion PDO 
 * 
 * 
 * @author kadet
 *
 */
	  

 class Conexion extends PDO { //extends usa la libreria php PDO que no necesita ser incluida desde PHP5
 	//declaro las variables como privadas
   private $tipo_de_base = 'mysql';
   private $host = 'db775859424.hosting-data.io';
   private $bbdd = 'db775859424';
   private $usuario = 'dbo775859424';
   private $contrasena = 'JRK441e22'; 


//   private $usuario = 'root';
//   private $contrasena = '12345678'; 
   //metodo construct
   public function __construct() {
      //Sobreescribo el metodo constructor de la clase PDO.
      //usamos las sentencia try catch
      try{
      	
         parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->bbdd, $this->usuario, $this->contrasena);
      
      } catch(PDOException $e){
      	
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      
      }
   } 

 } 
 

 
?>
