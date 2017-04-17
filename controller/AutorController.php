<?php

class AutorController extends ControladorBase{
    
    public $conectar;
    public $adapter;
    
    public function __construct() {
        parent::__construct();
        
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }

    public function index(){
        $autor=new Autor($this->adapter);//crear nuevo author
        
        $allauthors=$autor->getAll(); //cargar todos los datos, no se que tan eficiente sea esto en datos gigantes
        
        $pais=new Pais($this->adapter);
        $allpaises=$pais->getAll();
        $this->view("index",array(
            "allauthors"=>$allauthors,
            "allpaises"=>$allpaises,
            "Hola"=>"Anaquel Creacion"
        ));//
    }
    
    public function crear(){
        if(isset($_POST['nombre'])){
            
            $autor=new Autor();
            //recibiendo los valores por post
            $apellido=$_POST('apellido');
            $año=$_POST('año');
            $celular=$_POST('celular');
            $ciudad=$_POST('ciudad');
            $direccion=$_POST('direccion');
            $email=$_POST('email');
            $facebook=$_POST('facebook');
            $instagram=$_POST('instagram');
            $nacionalidad=$_POST('nacionalidad');
            $nombre=$_POST('nombre');
            $pais=$_POST('pais');
            $reseña=$_POST('reseña');
            $ruta_foto=$_POST('ruta_foto');
            $seudonimo=$_POST('seudonimo');
            $skype=$_POST('skype');
            $telefono=$_POST('telefono');
            $twitter=$_POST('twitter');
            $web=$_POST('web');
            //asignando los valores al nuevo objeto de clase autor
            $autor->setApellido($apellido);
            $autor->setAño($año);
            $autor->setCelular($celular);
            $autor->setCiudad($ciudad);
            $autor->setDireccion($direccion);
            $autor->setEmail($email);
            $autor->setFacebook($facebook);
            $autor->setInstagram($instagram);
            $autor->setNacionalidad($nacionalidad);
            $autor->setNombre($nombre);
            $autor->setPais($pais);
            $autor->setReseña($reseña);
            $autor->setRuta_foto($ruta_foto);
            $autor->setSeudonimo($seudonimo);
            $autor->setSkype($skype);
            $autor->setTelefono($telefono);
            $autor->setTwitter($twitter);
            $autor->setWeb($web);
            
            $save=$autor->save();//guardamos informacion de si se ejecuto o no el guardado
        }
        $this->redirect("Autor","index");//carga el header , controlador y accion por defecto
        
    }
    
    public function borrar(){
        if(isset($_GET['id'])){
            $id=(int)$_GET['id'];
            
            $autor = new Autor();
            $autor->deleteById($id);
         
            $this->redirect();
        }
        
    }
    
}
