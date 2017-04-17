<?php

class AutorModel extends ModeloBase{
    
    private $table;
    public function __construct($adapter){
        $this->table='autor';
        parent::__construct($this->table,$adapter);
        
    }
    public function getUnUsuario(){
        $query="SELECT FROM $this->table WHERE nombre='Gerardo'";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }
    
}