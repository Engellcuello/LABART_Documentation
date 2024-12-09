<?php
require_once '../../PHP/Modelo/Categorias.php';

class CategoriaController
{
    private $gestorCategoria;

    public function __construct()
    {
        $this->gestorCategoria = new Categoria();
    }

    public function obtenerCategorias()
    {
        $resultadoCategorias = $this->gestorCategoria->consultarCategorias();

        // Agrupar las categorías para la vista
        $agrupados = [];
        if ($resultadoCategorias) { // Verifica si hay resultados
            while ($categoria = $resultadoCategorias->fetch_assoc()) {
                $agrupados[] = $categoria;
            }
        }

        return $agrupados; 
    }
}


$controlador = new CategoriaController();
$categoriasAgrupadas = $controlador->obtenerCategorias(); 
