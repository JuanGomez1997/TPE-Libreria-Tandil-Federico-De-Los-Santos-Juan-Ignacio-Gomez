<?php
class Generos {
    private $db;

    public function __construct() {
        
        $this->db = new PDO('mysql:host=localhost;dbname=libreria tandil;charset=utf8', 'root', '');
    }

    // Obtener todos los géneros
    public function obtenerGeneros() {
        $query = $this->db->prepare("SELECT * FROM generos");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    // Obtener género por ID
    public function obtenerGeneroPorId($id) {
        $query = $this->db->prepare('SELECT * FROM generos WHERE id_genero = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    // Agregar género
    public function agregarGenero($nombre) {
        $query = $this->db->prepare("INSERT INTO generos (nombre) VALUES (?)");
        $query->execute([$nombre]);
    }

    // Actualizar género
    public function actualizarGenero($id, $nombre) {
        $query = $this->db->prepare("UPDATE generos SET nombre = ? WHERE id_genero = ?");
        $query->execute([$nombre, $id]);
    }

    // Eliminar género
    public function eliminarGenero($id) {
        $query = $this->db->prepare("DELETE FROM generos WHERE id_genero = ?");
        $query->execute([$id]);
    }
}




