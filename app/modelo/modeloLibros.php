<?php
    require_once 'modelo.php';
    class ModeloLibros extends Modelo{
        protected $db;

        
        public function obtenerLibros(){
            $consulta=$this->db->prepare("SELECT * FROM libro");
            $consulta->execute();
            $libros=$consulta->fetchAll(PDO::FETCH_OBJ);
            return $libros;
        }

        public function obtenerLibroporId($id){
            $consulta=$this->db->prepare("SELECT * FROM libro JOIN generos ON libro.genero_id=generos.id_genero WHERE libro.id_libro=?");
            $consulta->execute([$id]);
            $libros=$consulta->fetchAll(PDO::FETCH_OBJ);
            return $libros;
        }

        public function agregarLibro($titulo,$genero,$autor,$anio,$descripcion,$disponibilidad){
            $consulta=$this->db->prepare("INSERT INTO libro(titulo, genero_id, autor, anio, descripcion, disponibilidad) VALUES (?,?,?,?,?,?)");
            $consulta->execute([$titulo,$genero,$autor,$anio,$descripcion,$disponibilidad]);
            return $this->db->lastInsertId();
        }

        public function actualizarLibro($titulo,$genero,$autor,$anio,$descripcion,$disponibilidad,$id_libro){
            $consulta=$this->db->prepare("UPDATE libro SET titulo=?, genero_id=?, autor=?, anio=?, descripcion=?, disponibilidad=? WHERE libro.id_libro=?");
            $consulta->execute([$titulo,$genero,$autor,$anio,$descripcion,$disponibilidad,$id_libro]);
        }    
        
        public function eliminarLibro($id_libro){
            $consulta=$this->db->prepare("DELETE FROM libro WHERE id_genero=?");
            $consulta->execute([$id_libro]);
        }
        //---------------------------esto no va aca
        public function obtenerGeneros(){
            $consulta=$this->db->prepare("SELECT * FROM generos");
            $consulta->execute();
            $generos=$consulta->fetchAll(PDO::FETCH_OBJ);
            return $generos;
        }
    }
?>