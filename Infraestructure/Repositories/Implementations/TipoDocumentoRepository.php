<?php


interface VideoRepository
{
    public function save($tipoDocumento);

    public function busarPorId($id);

    public function busquedaPorNombre($nombre);
}