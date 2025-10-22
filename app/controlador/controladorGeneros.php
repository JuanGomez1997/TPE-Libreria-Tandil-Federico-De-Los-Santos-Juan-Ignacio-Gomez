<?php
require_once './app/modelo/modeloGeneros.php';
require_once './app/vista/vistaGeneros.php';
require_once './app/helpers/helpersAut.php';
require_once './app/modelo/modeloLibros.php';

class ControladorGeneros {
    private $modelo;
    private $vista;
    private $modeloLibro;

    public function __construct() {
        $this->modelo = new Generos;
        $this->vista = new vistaGeneros; 
        $this->modeloLibro= new ModeloLibros;
        
    }

    // Mostrar listado
    public function mostrarGeneros() {
        AutHelper::init();
        $generos = $this->modelo->obtenerGeneros();
        $this->vista->mostrarGeneros($generos);
    }

    public function mostrarLibroPorGenero($id){
        AutHelper::init();
        $generos=$this->modelo->obtenerGeneroPorId($id);
        $libros=$this->modeloLibro->obtenerLibroporId($id);
        $this->vista->mostrarGenero($id,$libros,$generos);
    }

    public function guardarGenero() {
        AutHelper::verify();
        $nombre = $_POST['nombre'] ?? null;

        if (empty($nombre)) {
            $this->vista->mostrarError("El nombre del género es obligatorio.");
            return;
        }

        $this->modelo->agregarGenero($nombre);
        header("Location: " . BASE_URL . "generos");
    }



    // Actualizar género
    public function actualizarGenero($id) {
        AutHelper::verify();

        $nombre = $_POST['nombre'] ?? null;

        if (empty($nombre)) {
            $this->vista->mostrarError("El nombre del género es obligatorio.");
            return;
        }

        $this->modelo->actualizarGenero($id, $nombre);
        header("Location: " . BASE_URL . "generos");
    }

    // Eliminar género
    public function eliminarGenero($id) {
        AutHelper::verify();
        $this->modelo->eliminarGenero($id);
        header("Location: " . BASE_URL . "generos");
    }
}



