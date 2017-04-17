<?php

class Pais extends EntidadBase{
    
    private $id, $iso, $nombre;
    
    public function __construct($adapter){
        $table="pais";
        parent::__construct($table,$adapter);
    }

    function getId() {
        return $this->id;
    }

    function getIso() {
        return $this->iso;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIso($iso) {
        $this->iso = $iso;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
}
