<?php
// archivo ajax_detalles_publicacion.php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['ID_publicacion'])) {
    require_once '../Controlador/controladorPublicaciones.php';

    $ID_publicacion = $_POST['ID_publicacion'];
    $resultado = $gestorPublicacion->consultarPublicacion($ID_publicacion);

    if ($resultado->num_rows > 0) {
        $publicacion = $resultado->fetch_assoc();
        $response = [
            'id' => $publicacion['ID_publicacion'],
            'imagen' => $publicacion['Img_publicacion'],
            'titulo' => $publicacion['Titulo_publicacion'],
            'descripcion' => $publicacion['Descripcion_publicacion'],
            'fechaCreacion' => $publicacion['Fecha_publicacion'],
            'usuario' => $publicacion['Nombre_usuario']
        ];
        echo json_encode($response);
    } else {
        echo json_encode(['error' => 'Publicación no encontrada']);
    }
}
