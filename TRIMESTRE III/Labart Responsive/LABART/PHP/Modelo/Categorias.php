<?php
require_once 'Conexion.php';

class Categoria
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Conectarse();
    }

    public function consultarCategorias()
    {
        $sql = "SELECT Img_categoria, Nombre_categoria FROM categoria"; 
        $resultado = $this->conexion->query($sql);
        return $resultado; 
    }
}