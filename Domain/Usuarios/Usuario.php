<?php

public class Usuario {
    private $id;
    private $usuario;       // nombre de usuario
    private $contrasena;
    private $observacion;
    private $estado;        // estado del usuario (activo?)
    private $rol;

    function private __construct($usuario, $contrasena,$observacion, $estado, $rol) {
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->observacion = $observacion;
        $this->estado = $estado;
        $this->rol = $rol;
    }

    public static function crear($usuario, $contrasena,$observacion, $estado, $rol){
        $nuevoUsuario = new Usuario($usuario, $contrasena,$observacion, $estado, $rol);
        return $nuevoUsuario;
    }

    public void cambiarContrasena($nuevaContrasena){
        $this->contrasena = $nuevaContrasena;
    }

    public void editar($nuevosDatos){
        $this = $nuevosDatos;
    }

    public void descativar(){
        $this->estado = false;
    }

    public void ativar(){
        $this->estado = true;
    }
}