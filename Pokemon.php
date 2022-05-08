<?php

class Pokemon
{
    private $id;
    private $identificador;
    private $nombre;
    private $imagen;
    private $tipo;
    private $descripcion;

    public function __construct($identificador, $nombre, $imagen, $tipo, $descripcion)
    {
        $this->identificador = $identificador;
        $this->nombre = $nombre;
        $this->imagen = $imagen;
        $this->tipo = $tipo;
        $this->descripcion = $descripcion;
    }


    public function getIdentificador(){
        return $this->identificador;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function getTipo(){
        return $this->tipo;
    }


    public function getDescripcion(){
        return $this->descripcion;
    }

}