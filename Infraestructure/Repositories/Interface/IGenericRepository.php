<?php


interface GenericRepository
{
    public function guardar($object);

    public function buscar($id);

    public function actualizar($newObj, $oldObj);

    public function eliminar($id);

    public function listar($nombreTabla);
}