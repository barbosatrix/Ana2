<?php

class Autor extends EntidadBase{
  
  private $id, $nombre, $apellido, $seudonimo, $nacionalidad, $email;
  private $direccion, $ciudad, $pais, $telefono;
  private $año, $web, $celular, $facebook, $instagram, $skype, $twitter, $ruta_foto, $reseña;

  public function __construct($adapter){
      $table="Autor";
      parent::__construct($table,$adapter);
  }

  function getId() {      return $this->id;  }

  function getNombre() {      return $this->nombre;  }

  function getApellido() {      return $this->apellido;  }

  function getSeudonimo() {      return $this->seudonimo;  }

  function getNacionalidad() {      return $this->nacionalidad;  }

  function getEmail() {      return $this->email;  }

  function getDireccion() {      return $this->direccion;  }

  function getCiudad() {      return $this->ciudad;  }

  function getPais() {      return $this->pais;  }

  function getTelefono() {      return $this->telefono;  }

  function getAño() {      return $this->año;  }

  function getWeb() {      return $this->web;  }

  function getCelular() {      return $this->celular;  }

  function getFacebook() {      return $this->facebook;  }

  function getInstagram() {      return $this->instagram;  }

  function getSkype() {      return $this->skype;  }

  function getTwitter() {      return $this->twitter;  }

  function getRuta_foto() {      return $this->ruta_foto;  }

  function getReseña() {      return $this->reseña;  }

  function setId($id) {      $this->id = $id;  }

  function setNombre($nombre) {      $this->nombre = $nombre;  }

  function setApellido($apellido) {      $this->apellido = $apellido;  }

  function setSeudonimo($seudonimo) {      $this->seudonimo = $seudonimo;  }

  function setNacionalidad($nacionalidad) {      $this->nacionalidad = $nacionalidad;  }

  function setEmail($email) {      $this->email = $email;  }

  function setDireccion($direccion) {      $this->direccion = $direccion;  }

  function setCiudad($ciudad) {      $this->ciudad = $ciudad;  }

  function setPais($pais) {      $this->pais = $pais;  }

  function setTelefono($telefono) {      $this->telefono = $telefono;  }

  function setAño($año) {      $this->año = $año;  }

  function setWeb($web) {      $this->web = $web;  }

  function setCelular($celular) {      $this->celular = $celular;  }

  function setFacebook($facebook) {      $this->facebook = $facebook;  }

  function setInstagram($instagram) {      $this->instagram = $instagram;  }

  function setSkype($skype) {      $this->skype = $skype;  }

  function setTwitter($twitter) {      $this->twitter = $twitter;  }

  function setRuta_foto($ruta_foto) {      $this->ruta_foto = $ruta_foto;  }

  function setReseña($reseña) {      $this->reseña = $reseña;  }

  public function save(){
      $query='INSERT INTO Autor (id, nombre, apellido, seudonimo, nacionalidad, email,direccion, ciudad, pais, telefono, año, web'
          .'celular, facebook, instagram, skype, twitter, ruta_foto, reseña)'
          .'values(NULL,"'
          .$this->nombre.'      ","'          .$this->apellido.'    ","'
          .$this->seudonimo.'   ","'          .$this->nacionalidad.'","'
          .$this->email.'       ","'          .$this->direccion.'   ","'
          .$this->ciudad.'      ","'          .$this->pais.'        ","'
          .$this->telefono.'    ","'          .$this->año.'         ","'
          .$this->web.'         ","'          .$this->celular.'     ","'
          .$this->facebook.'    ","'          .$this->instagram.'   ","'
          .$this->skype.'       ","'          .$this->twitter.'     ","'
          .$this->ruta_foto.'   ","'          .$this->reseña.'      ")';
          $save=$this->db()->query($query);
          return $save;
      }
}