<?php
    require_once './app/modelo/modeloUsuario.php';
    require_once './app/vista/vistaUsuario.php';
    require_once './app/helpers/helpersAut.php';
    class ControladorUsuario{
        private $modeloUsuario;
        private $vistaUsuario;
        public function __construct(){
            $this->modeloUsuario=new ModeloUsuario;
            $this->vistaUsuario=new VistaUsuario;
        }

        public function ingreso(){
            $this->vistaUsuario->mostrarIngreso();
        }

        public function accesoSesion(){
            $usuario=$_POST['usuario'];
            $contrasenia=$_POST['contrasenia'];
            if (empty($usuario) || empty($contrasenia)){
                $this->vistaUsuario->mostrarIngreso('Faltan campos por completar');
                return;
            }
            $nombre=$this->modeloUsuario->obtenerUsuario($usuario);

            if ($nombre && password_verify($contrasenia,$nombre->contrasenia)){
                AutHelper::login($nombre);
                header('location: ' . BASE_URL);
                exit();
            } else{
                $this->vistaUsuario->mostrarIngreso('Usuario Invalido');
            }
        }

        public function cerrarsesion() {
            AutHelper::logout();
            header('Location: ' . BASE_URL);    
        }

        public function mostrar404() {
            $this->vistaUsuario->mostrar404();
        }

    }