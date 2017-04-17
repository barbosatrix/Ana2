<?php

class CaracteristicasTecnicas extends EntidadBase{
    
    private $id_libro,$nombre,$isbn,$titulo_libro,$autor1,$autor2,$autor3,$ilustrador1,$ilustrador2,$fecha_libro,$edicion,$tiraje,$peso,$alto,$ancho;
    
    public function __construct($adapter) {
        $table="CaracteristicasTecnicas";
        parent:: __construct($table,$adapter);
    }
            
    public function save(){
        $query=('INSERT INTO caracteristicas_tecnicas
        (id_libro,
        papel_paginas1,
        gramaje_paginas1,
        proveedor_papel1,
        papel_paginas2,
        gramaje_paginas2,
        proveedor_papel2,
        papel_paginas3,
        gramaje_paginas3,
        proveedor_papel3,
        formato_impresion,
        cantidad_formatos,
        papel_portada,
        gramaje_portada,
        proveedor_portada,
        formato_portada,
        papel_guarda,
        gramaje_guarda,
        proveedor_guarda,
        papel_sobrecubierta,
        gramaje_sobrecubierta,
        proveedor_sobrecubierta,
        encuadernacion,
        proveedor_encuadernacion,
        caracteristicas_especiales,
        proveedor_caracteristicas,
        tinta1,
        tinta2,
        tinta3,
        tinta4,
        tinta5,
        tinta6,
        tinta7,
        tinta8,
        tinta9)'.
        'values(NULL,"'
        .$this->id_libro.'      ","'       .$this->isbn.'    ","'
        .$this->titulo.'   ","'             .$this->autor1.'","'
        .$this->autor2.'      ","'          .$this->autor3.'    ","'
        .$this->ilustrador1.'   ","'        .$this->ilustrador2.'","'
        .$this->fecha.'       ","'          .$this->edicion.'   ","'
        .$this->tiraje.'      ","'          .$this->peso.'      ","'  
        .$this->alto.'      ","'            .$this->ancho.'    ")';

    $save=$this->db()->query($query);
    return $save;

    }
    
}