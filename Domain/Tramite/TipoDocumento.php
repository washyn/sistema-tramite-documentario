<?php

class TipoDocumento
{
    private $id;
    private $tipoDescripcion;
    private $tipoEstado;

    public function __construct($id,$tipoDescripcion,$tipoEstado)
    {
        $this->id = $id;
        $this->tipoDescripcion = $tipoDescripcion;
        $this->tipoEstado = $tipoEstado;
    }


    public static function create($id,$tipoDescripcion,$tipoEstado)
    {
        $tipoDocumento = new self($id,$tipoDescripcion,$tipoEstado);
        
        return $tipoDocumento;
    }

}



