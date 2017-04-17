<?php

class Editorial extends EntidadBase{
    
    private $nombre,$direccion,$ciudad,$pais,$telefono;
    
    public function __construct($adapter) {
        $table="Editorial";
        parent:: __construct($table,$adapter);
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getPais() {
        return $this->pais;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
   
    public function save(){
         $query='INSERT INTO Editorial(id, nombre, direccion, ciudad , pais, telefono)'
          .'values(NULL,"'
          .$this->nombre.'      ","'       
          .$this->direccion.'   ","'       
          .$this->ciudad.'       ","'      
          .$this->pais.'      ","'         
          .$this->telefono.'    ")';
          
         $save=$this->db()->query($query);
         return $save;
        
    }
    
}