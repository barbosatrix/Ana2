<?php
class PaisModel extends ModeloBase{
    private $table;
     
    public function __construct($adapter){
        $this->table="pais";
        parent::__construct($this->table, $adapter);
    }
     
    //Metodos de consulta
    public function getUnPais($id){
        $query="SELECT * FROM pais WHERE id=$id";
        $pais=$this->ejecutarSql($query);
        return $pais;
    }
}

