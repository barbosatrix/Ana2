<?php

class Tinta extends EntidadBase{
    
    private $nombre,
            $mezcla1,
            $mezcla2;
    
    public function __construct($adapter) {
        $table="Tinta";
        parent:: __construct($table,$adapter);
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getMezcla1() {
        return $this->mezcla1;
    }

    function getMezcla2() {
        return $this->mezcla2;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setMezcla1($mezcla1) {
        $this->mezcla1 = $mezcla1;
    }

    function setMezcla2($mezcla2) {
        $this->mezcla2 = $mezcla2;
    }

    public function save(){
         $query='INSERT INTO Tinta(id,nombre,$mezcla1,$mezcla2,telefono,direccion,ciudad)'
          .'values(NULL,"'
          .$this->nombre.'      ","'       .$this->mezcla1.'   ","'
          .$this->mezcla2.'     ",)';
          
         $save=$this->db()->query($query);
         return $save;
        
    }
        
}