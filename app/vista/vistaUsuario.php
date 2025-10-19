<?php
    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
    Class VistaUsuario {
        private $smarty;
        
        public function __construct() {
            $this->smarty = new Smarty(); 
        }
        
        public function mostrarIngreso($error = null) {
            $this->smarty->assign('error', $error);
            $this->smarty->display('ingreso.tpl');       
        }

        public function mostrar404() {
            $this->smarty->display('404.tpl');
        }
    }
?>