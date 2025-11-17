<?php

class EmpleadosModelo
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function obtenerTodos(): array
    {
        $sql = "SELECT id, nombre, email FROM empleados";
        $stmt = $this->db->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->execute(); // No hay parámetros, pero igual se ejecuta
        return $stmt->fetchAll();
    }

    public function insertar(string $nombre, string $email): bool
    {
        $sql = "INSERT INTO empleados (nombre, email)
                VALUES (:nombre, :email)";

        $stmt = $this->db->prepare($sql);

        // Enlazar parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email',  $email);

        // Ejecutar consulta
        return $stmt->execute();
    }
}