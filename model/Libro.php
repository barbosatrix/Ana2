<?php

class Libro extends EntidadBase{
    
    private $id_libro,$nombre,$isbn,$titulo_libro,$autor1,$autor2,$autor3,$ilustrador1,$ilustrador2,$fecha_libro,$edicion,$tiraje,$peso,$alto,$ancho;
    
    public function __construct($adapter) {
        $table="Libro";
        parent:: __construct($table,$adapter);
    }
    
    function getId_libro() {
        return $this->id_libro;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getIsbn() {
        return $this->isbn;
    }

    function getTitulo_libro() {
        return $this->titulo_libro;
    }

    function getAutor1() {
        return $this->autor1;
    }

    function getAutor2() {
        return $this->autor2;
    }

    function getAutor3() {
        return $this->autor3;
    }

    function getIlustrador1() {
        return $this->ilustrador1;
    }

    function getIlustrador2() {
        return $this->ilustrador2;
    }

    function getFecha_libro() {
        return $this->fecha_libro;
    }

    function getEdicion() {
        return $this->edicion;
    }

    function getTiraje() {
        return $this->tiraje;
    }

    function getPeso() {
        return $this->peso;
    }

    function getAlto() {
        return $this->alto;
    }

    function getAncho() {
        return $this->ancho;
    }

    function setId_libro($id_libro) {
        $this->id_libro = $id_libro;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    function setTitulo_libro($titulo_libro) {
        $this->titulo_libro = $titulo_libro;
    }

    function setAutor1($autor1) {
        $this->autor1 = $autor1;
    }

    function setAutor2($autor2) {
        $this->autor2 = $autor2;
    }

    function setAutor3($autor3) {
        $this->autor3 = $autor3;
    }

    function setIlustrador1($ilustrador1) {
        $this->ilustrador1 = $ilustrador1;
    }

    function setIlustrador2($ilustrador2) {
        $this->ilustrador2 = $ilustrador2;
    }

    function setFecha_libro($fecha_libro) {
        $this->fecha_libro = $fecha_libro;
    }

    function setEdicion($edicion) {
        $this->edicion = $edicion;
    }

    function setTiraje($tiraje) {
        $this->tiraje = $tiraje;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

    function setAlto($alto) {
        $this->alto = $alto;
    }

    function setAncho($ancho) {
        $this->ancho = $ancho;
    }

        
    public function save(){
         $query='INSERT INTO Libro(id, editorial,  isbn, titulo, autor1, autor2, autor3, ilustrador1, ilustrador2, fecha, edicion, tiraje, peso, alto, ancho)'
          .'values(NULL,"'
          .$this->editorial.'      ","'       .$this->isbn.'    ","'
          .$this->titulo.'   ","'             .$this->autor1.'","'
          .$this->autor2.'      ","'          .$this->autor3.'    ","'
          .$this->ilustrador1.'   ","'        .$this->ilustrador2.'","'
          .$this->fecha.'       ","'          .$this->edicion.'   ","'
          .$this->tiraje.'      ","'          .$this->peso.'      ","'  
          .$this->alto.'      ","'            .$this->ancho.'    ",)';
          
         $save=$this->db()->query($query);
         return $save;
        
    }
    
}