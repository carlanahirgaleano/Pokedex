<?php

class ConexionDatabase{
     private $config;
    private $conexion;


    public function __construct()
    {
        $this->config = parse_ini_file("config/config.ini");
        $config =  $this->config;
        $this->conexion = new mysqli($config["host"], $config["usuario"], $config["clave"], $config["base"]);
    }

    private function ejecutaQuery($sql)
    {
        $comando = $this->conexion->prepare($sql);
        $comando->execute();
        return $comando->get_result();
    }

    public function devolverTodosLosPokemones()
    {
        $sql = "SELECT identificador, nombre, tipoimagen, imagen FROM Pokemon";
        return $this->ejecutaQuery($sql);
    }

    public function buscarUnPokemon($input)
    {
        $sql = "SELECT * FROM Pokemon WHERE nombre = ? OR tipo= ? OR identificador = ?";
        $comando = $this->conexion->prepare($sql);
        $comando->bind_param("ssi", $input , $input , $input);
        $comando->execute();
        return $comando->get_result();
    }

    public function buscarUsuarioPassword($usuario,$password){
        $sql = "SELECT * FROM credenciales WHERE email = ? AND password = ?";
        $comando = $this->conexion->prepare($sql);
        $password = md5($password);
        $comando->bind_param("ss",$usuario,$password);
        $comando->execute();
        return $comando->get_result();
    }

    public function eliminarPokemon($id){
        $sql = "DELETE FROM Pokemon WHERE identificador = ? ";
        $comando = $this->conexion->prepare($sql);
        $comando -> bind_param("i",$id);
        $comando->execute();
        return $comando->get_result();
        
    }


    public function cerrarConexion(){
        return $this->conexion->close();
    }


}