<?php

require_once 'config/global.php';
require_once 'core/ControladorBase.php';
require_once 'core/ControladorFrontal.func.php';
//require_once 'controller/PaisController.php';

if (isset($_GET['controller'])) {
    $controllerObj = cargarControlador($_GET['controller']);
    
    echo 'index.php cargando controlador por defecto';
} else {
    $controllerObj = cargarControlador(CONTROLADOR_DEFECTO);
    //echo 'index.php cargando controlador por defecto';
}
lanzarAccion($controllerObj);
