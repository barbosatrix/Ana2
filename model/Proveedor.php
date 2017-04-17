<?php

class Proveedor extends EntidadBase{
    
    private $nombre_proveedor,
            $contacto_proveedor,
            $email_proveedor,
            $telefono_proveedor,
            $direccion_proveedor,
            $ciudad_editorial;
    
    public function __construct($adapter) {
        $table="Proveedor";
        parent:: __construct($table,$adapter);
    }
       
    public function save(){
         $query='INSERT INTO Proveedor(id,nombre,contacto,email,telefono,direccion,ciudad)'
          .'values(NULL,"'
          .$this->nombre.'      ","'       .$this->contacto.'   ","'
          .$this->email.'       ","'       .$this->telefono.'   ","'
          .$this->direccion.'   ","'       .$this->ciudad.'     ",)';
          
         $save=$this->db()->query($query);
         return $save;
        
    }
        
}