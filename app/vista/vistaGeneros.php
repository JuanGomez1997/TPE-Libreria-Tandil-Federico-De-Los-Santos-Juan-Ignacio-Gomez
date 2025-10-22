<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class vistaGeneros {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

     public function mostrarGeneros($generos){
            $this->smarty->assign('generos',$generos);
            $this->smarty->assign('opcion','agregar');
            $this->smarty->assign('_SESSION', $_SESSION);
            $this->smarty->display('ListadoGeneros.tpl');
        }

        public function mostrarGenero($id,$libros,$generos){
            $this->smarty->assign('id',$id);
            $this->smarty->assign('libros',$libros);
            $this->smarty->assign('generos',$generos);
            $this->smarty->assign('opcion','editar');
            $this->smarty->assign('_SESSION', $_SESSION);
            $this->smarty->display('listado_libros_por_Generos.tpl');
        }
        public function mostrarError($error){
            $this->smarty->assign('error', $error);
            $this->smarty->display('error.tpl');
        }
}


