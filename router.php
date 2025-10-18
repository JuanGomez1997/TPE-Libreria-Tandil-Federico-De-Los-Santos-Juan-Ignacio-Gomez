<?php
    require_once './app/controlador/controladorLibros.php';
    define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

    $accion = 'inicio'; 
    if (!empty($_GET['accion'])) {
        $accion = $_GET['accion'];
    }
    $params = explode('/', $accion);

    switch ($params[0]) {
        case 'inicio':
            $controlador= new ControladorLibros;
            $controlador->listarLibros();
            break;
        case 'verlibro':
            $controlador= new ControladorLibros;
            $controlador->verLibro($params[1]);
            break;
        case 'agregarlibro':
            $controlador= new ControladorLibros;
            $controlador->aniadirLibro();
            break;
        case 'editarlibro':
            $controlador= new ControladorLibros;
            $controlador->editarLibro($params[1]);
            break;
        case 'eliminarlibro':
            $controlador= new ControladorLibros;
            $controlador->borrarLibro($params[1]);
            break;
        
        default:
            echo "Error!";
            break;
    }
?>