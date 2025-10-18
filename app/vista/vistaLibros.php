<?php
    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
    class VistaLibros{
        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty;
        }


        public function mostrarLibros($libros,$generos){
            $this->smarty->assign('libros',$libros);
            $this->smarty->assign('generos',$generos);
            $this->smarty->assign('opcion','agregar');
            $this->smarty->display('listadoLibros.tpl');
        }

        public function mostrarLibro($id,$libros,$generos){
            $this->smarty->assign('id',$id);
            $this->smarty->assign('libros',$libros);
            $this->smarty->assign('generos',$generos);
            $this->smarty->assign('opcion','editar');
            $this->smarty->display('libroId.tpl');
        }

        public function mostrarError($error){
            $this->smarty->assign('error', $error);
            $this->smarty->display('error.tpl');
        }




    }
?>