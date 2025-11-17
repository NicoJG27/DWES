<?php

    class CursoModelo {
        private PDO $pdo;

        public function __construct(PDO $pdo) {
            $this->pdo = $pdo;
        }

        public function agregar(string $nombre){
            $sql = "INSERT INTO cursos (nombre) VALUES (:nombre)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->execute();
            return $this->pdo->lastInsertId();
        }

        public function idPorNombre(string $nombre) : ?int{
            $sql = "SELECT id FROM cursos WHERE nombre = :nombre";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->execute(); 
            return $stmt->fetchColumn();
        }

        public function todos(){
            $sql = "SELECT * FROM cursos";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function vaciarTodo(){
            $sql = "DELETE FROM cursos";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            $sqlReset = "ALTER TABLE cursos AUTO_INCREMENT = 1";
            $stmtReset = $this->pdo->prepare($sqlReset);
            $stmtReset->execute();
        }
    }
?>