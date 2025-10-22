<?php
    require_once './app/controlador/controladorLibros.php';
    require_once './app/controlador/controladorUsuario.php';
    require_once './app/helpers/helpersAut.php';
    require_once './app/controlador/controladorGeneros.php';

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
        case 'iniciosesion':
            $controlador= new ControladorUsuario;
            $controlador->ingreso();
            break;
        case 'accesosesion':
            $controlador= new ControladorUsuario;
            $controlador->accesoSesion();
            break;
        case 'cerrarsesion':
            $controlador= new ControladorUsuario;
            $controlador->cerrarsesion();
            break;
        case 'generos':
            $controlador = new ControladorGeneros();
            $controlador->mostrarGeneros();
            break;

        case 'libroporgenero':
            $controlador = new ControladorGeneros();
            $controlador->mostrarLibroPorGenero($params[1]);
            break;

        case 'guardarGenero':
            $controlador = new ControladorGeneros();
            $controlador->guardarGenero();
            break;

        case 'actualizarGenero':
                $controlador = new ControladorGeneros();
                $controlador->actualizarGenero($params[1]);
            break;

        case 'eliminarGenero':
                $controlador = new ControladorGeneros();
                $controlador->eliminarGenero($params[1]);
            break;
        
        default:
            $controlador= new ControladorUsuario;
            $controlador->mostrar404();
            break;
    }
?>