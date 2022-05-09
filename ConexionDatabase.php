<?php
include_once ("Pokemon.php");

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
        $sql = "SELECT p.id, p.identificador, p.nombre, tp.imagenTipo, p.imagen FROM Pokemon p JOIN tipo_pokemon tp ON p.tipo=tp.id ORDER BY identificador";
        return $this->ejecutaQuery($sql);
    }

    public function buscarUnPokemon($input)
    {
        $sql = "SELECT p.id, p.tipo, p.identificador, p.nombre, tp.imagenTipo, p.imagen, p.descripcion FROM Pokemon 
        p JOIN tipo_pokemon tp ON p.tipo=tp.id 
        WHERE p.nombre = ? OR tp.descripcion= ? OR p.identificador = ? or p.id = ?";
        $comando = $this->conexion->prepare($sql);
        $comando->bind_param("ssii", $input , $input , $input, $input);
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

    public function crearPokemon($nuevoPokemon){
        $identificador = $nuevoPokemon->getIdentificador();
        $nombre = $nuevoPokemon->getNombre();
        $imagen = $nuevoPokemon->getImagen();
        $tipo = $nuevoPokemon->getTipo();
        $descripcion = $nuevoPokemon->getDescripcion();

        $query = "INSERT INTO pokemon (identificador, nombre, imagen, tipo, descripcion) VALUES (?,?,?,?,?)";

        $consulta = $this->conexion->prepare($query);
        $consulta->bind_param("issis",$identificador, $nombre, $imagen, $tipo, $descripcion);
        $consulta->execute();

//        echo $consulta->affected_rows;

        return $nuevoPokemon;
    }

    public function existePokemon($identificador, $nombre){
        $existePokemon=false;
        $pokemonesExistentes = $this->devolverTodosLosPokemones();
        foreach ($pokemonesExistentes as $pokemon) {
            if ($pokemon["identificador"] == $identificador || strtolower($pokemon["nombre"]) == $nombre) {
                $existePokemon = true;
                break;
            }
        }
        return $existePokemon;
    }

    public function editarPokemon($pokemon, $idPokemon){
        $identificador = $pokemon->getIdentificador();
        $nombre = $pokemon->getNombre();
        $imagen = $pokemon->getImagen();
        $tipo = $pokemon->getTipo();
        $descripcion = $pokemon->getDescripcion();

        $query ="UPDATE Pokemon SET identificador=?, nombre= ?, descripcion= ?, imagen= ?, tipo= ? WHERE id = ?";

        $consulta = $this->conexion->prepare($query);
        $consulta->bind_param("isssii",$identificador, $nombre,$descripcion,$imagen,$tipo, $idPokemon);
        $consulta->execute();
        $consulta->get_result();

        return $pokemon;

    }

    public function cerrarConexion(){
        return $this->conexion->close();
    }


}