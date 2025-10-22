<?php
    require_once './app/modelo/modeloLibros.php';
    require_once './app/vista/vistaLibros.php';
    require_once './app/helpers/helpersAut.php';
    require_once './app/modelo/modeloGeneros.php';
    class ControladorLibros{

        private $vistaLibro;
        private $modeloLibro;
        private $modeloGeneros;
        public function __construct(){
            $this->vistaLibro= new VistaLibros;
            $this->modeloLibro= new ModeloLibros;
            $this->modeloGeneros=new Generos;
        }

        public function listarLibros(){
            AutHelper::init();
            $libros=$this->modeloLibro->obtenerLibros();
            $generos=$this->modeloGeneros->obtenerGeneros();
            $this->vistaLibro->mostrarLibros($libros,$generos);
        }

        public function verLibro($id){
            AutHelper::init();
            $libros=$this->modeloLibro->obtenerLibroporId($id);
            $generos=$this->modeloGeneros->obtenerGeneros();
            $this->vistaLibro->mostrarLibro($id,$libros,$generos);
        }

        public function aniadirLibro(){
            AutHelper::verify();
            if (isset($_POST['titulo']) && isset($_POST['genero'])  && isset($_POST['autor'])  && isset($_POST['anio']) && isset($_POST['descripcion']) && isset($_POST['disponibilidad'])){
                if (empty($_POST['titulo']) || empty($_POST['genero']) || empty($_POST['autor']) || empty($_POST['anio']) || empty($_POST['descripcion']) || empty($_POST['disponibilidad'])){
                    $this->vistaLibro->mostrarError("Datos incompletos");
                    return;
                }
            }
            $titulo=$_POST['titulo'];
            $genero=$_POST['genero'];
            $autor=$_POST['autor'];
            $anio=$_POST['anio'];
            $descripcion=$_POST['descripcion'];
            $disponibilidad=$_POST['disponibilidad'];
            $this->modeloLibro->agregarLibro($titulo,$genero,$autor,$anio,$descripcion,$disponibilidad);
            header("Location: ". BASE_URL);
        }

        public function editarLibro($id){
            AutHelper::verify();
            if (isset($_POST['titulo']) && isset($_POST['genero'])  && isset($_POST['autor'])  && isset($_POST['anio']) && isset($_POST['descripcion']) && isset($_POST['disponibilidad'])){
                if (empty($_POST['titulo']) || empty($_POST['genero']) || empty($_POST['autor']) || empty($_POST['anio']) || empty($_POST['descripcion']) || empty($_POST['disponibilidad'])){
                    $this->vistaLibro->mostrarError("Datos incompletos");
                    return;
                }
            }
            $titulo=$_POST['titulo'];
            $genero=$_POST['genero'];
            $autor=$_POST['autor'];
            $anio=$_POST['anio'];
            $descripcion=$_POST['descripcion'];
            $disponibilidad=$_POST['disponibilidad'];
            $this->modeloLibro->actualizarLibro($titulo,$genero,$autor,$anio,$descripcion,$disponibilidad,$id);
            header("Location: ". BASE_URL);
        }

        public function borrarLibro($id){
            AutHelper::verify();
            $this->modeloLibro->eliminarLibro($id);
            header("Location: ". BASE_URL);
        }
    }
?>