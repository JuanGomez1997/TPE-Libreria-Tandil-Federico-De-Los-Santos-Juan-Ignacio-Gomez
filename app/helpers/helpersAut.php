<?php

    class AutHelper {

        public static function init() {
            if (session_status() != PHP_SESSION_ACTIVE) {
                session_start();
            }
        }

        public static function login($usuarios) {
            AutHelper::init();
            $_SESSION['id'] = $usuarios->id;
            $_SESSION['usuario'] = $usuarios->usuario; 
        }

        public static function verify() {
            AutHelper::init();
            if (!isset($_SESSION['id'])) {
                header('Location: ' . BASE_URL . 'iniciosesion');
                die();
            }    
        }

        public static function logout() {
            AutHelper::init();
            session_destroy();
        }   
        
    }
?>