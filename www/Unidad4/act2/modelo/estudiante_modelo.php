<?php

class EstudianteModelo
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function agregar(string $nombre, int $edad, ?int $cursoID)
    {
        $sql = "INSERT INTO estudiantes (nombre, edad, curso_id) VALUES (:nombre, :edad, :curso_id)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':edad', $edad);
        $stmt->bindParam(':curso_id', $cursoID);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }

    public function actualizarPorNombre(string $nombreActual, string $nuevoNombre, int $nuevaEdad, int $nuevoCursoID)
    {
        $sql = "UPDATE estudiantes SET nombre = :nuevoNombre, edad = :nuevaEdad, curso_id = :nuevoCursoID WHERE nombre = :nombreActual";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nuevoNombre', $nuevoNombre);
        $stmt->bindParam(':nuevaEdad', $nuevaEdad);
        $stmt->bindParam(':nuevoCursoID', $nuevoCursoID);
        $stmt->bindParam(':nombreActual', $nombreActual);
        $stmt->execute();
    }

    public function eliminarPorNombre(string $nombre)
    {
        $sql = "DELETE FROM estudiantes WHERE nombre = :nombre";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();
    }

    public function conCurso()
    {
        $sql = "SELECT 
                    estudiantes.id, 
                    estudiantes.nombre, 
                    estudiantes.edad, 
                    cursos.nombre AS curso_nombre 
                FROM estudiantes 
                INNER JOIN cursos ON estudiantes.curso_id = cursos.id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function vaciarTodo()
    {
        $sql = "DELETE FROM estudiantes";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $sqlReset = "ALTER TABLE estudiantes AUTO_INCREMENT = 1";
        $stmtReset = $this->pdo->prepare($sqlReset);
        $stmtReset->execute();
    }
}
