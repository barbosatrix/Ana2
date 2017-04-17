<?php

class EntidadBase{
    private $table,$db,$conectar;

    public function __construct($table,$adapter){
        $this->table=(string) $table;

        $this->conectar=null;
        $this->db=$adapter;

    }
    function getDb() {
        return $this->db;
    }

    function getConectar() {
        return $this->conectar;
    }

    public function getAll() {

        $query = $this->db->query("SELECT * FROM $this->table");

        while ($row = $query->fetch_object()) {
           // echo "hola";
            $resultSet[] = $row;
        }
        return $resultSet;
    }


    public function getById($id) {

        $query = $this->db->query("SELECT * FROM $this->table WHERE id=$id");
        if ($row = $query->fetch_object()) {
            $resultSet= $row;
        }
        return $resultSet;
    }

    public function getBy($column, $value) {

        $query = $this->db->query("SELECT * FROM $this->table WHERE $column ='$value'");

        if ($row = $query->fetch_object()) {
            $resultSet[] = $row;
        }
        return $resultSet;
    }


    public function deleteById($id) {

        $query = $this->db->query("DELETE FROM $this->table WHERE id=$id");
        return $query;
    }

    function deleteBy($column, $value) {

        $query = $this->db->query("DELETE FROM $this->table WHERE $column ='$value'");
        return $query;
    }

}
