<?php

class Bodega extends EntidadBase{
    
    private $nombre,$contacto,$email, $telefono, $direccion,$ciudad,$pais, $empresa;//se adiciona empresa por el momento
    
    public function __construct($adapter) {
        $table="Bodega";
        parent:: __construct($table,$adapter);
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getContacto() {
        return $this->contacto;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefono() {
        return $this->telefono;
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

    function getEmpresa() {
        return $this->empresa;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setContacto($contacto) {
        $this->contacto = $contacto;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
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

    function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function save(){
         $query='INSERT INTO Bodega(id, nombre, contacto, email, telefono, direccion, ciudad , pais, empresa)'
          .'values(NULL,"'
          .$this->nombre.'      ","'          .$this->contacto.'    ","'
          .$this->email.'   ","'              .$this->telefono.'","'
          .$this->direccion.'       ","'      .$this->ciudad.'   ","'
          .$this->pais.'      ","'            .$this->empresa.'        ",)';
          
         $save=$this->db()->query($query);
         return $save;
        
    }
    
}