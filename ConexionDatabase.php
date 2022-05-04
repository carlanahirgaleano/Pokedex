<?php

class ConexionDatabase{
     private $config;
    private $conexion;


    public function __construct()
    {
        $this->config = parse_ini_file("config.ini");
        $configuracion =  $this->config;
        $this->conexion = new mysqli($configuracion["host"], $configuracion["usuario"], $configuracion["clave"], $configuracion["base"]);

    }




    public function ejecutaQuery($sql)
    {
        $comando = $this->conexion->prepare($sql);
        $comando->execute();
        $resultado = $comando->get_result();
        return $resultado;
    }

    public function devolverTodosLosPokemones()
    {
        $sql = "SELECT identificador, nombre, tipoImagen, imagen FROM Pokemon";
        $resultado = $this->ejecutaQuery($sql);
        return $resultado;
    }

    public function buscarUnPokemon($input)
    {
        $sql = "SELECT * FROM Pokemon WHERE nombre = ? OR  tipo= ? OR identificador = ?";

        $comando = $this->conexion->prepare($sql);
        $comando->bind_param("ssi", $input , $input , $input);

        $comando->execute();

        $resultado = $comando->get_result();
        return $resultado;
    }


}