<?php
    require_once "modelo.php";
    class ModeloUsuario extends Modelo {
        protected $db;

        function obtenerUsuario($usuario) {
            $query = $this->db->prepare('SELECT * FROM usuarios WHERE usuario = ?');
            $query->execute([$usuario]);

            return $query->fetch(PDO::FETCH_OBJ);
        }

    }
?>