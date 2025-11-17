<?php
class EmpleadosControlador
{
    private EmpleadosModelo $modelo;

    public function __construct(EmpleadosModelo $modelo)
    {
        $this->modelo = $modelo;
    }

    public function listar(): array
    {
        return $this->modelo->obtenerTodos();
    }

    public function crear(array $data): array
    {
        if (empty($data["nombre"]) || empty($data["email"])) {
            // Marca el código de estado Http que se enviará al cliente
            http_response_code(400);
            // Cuerpo del mensaje que se envía.
            return ["error" => "nombre y email son obligatorios"];
        }

        if ($this->modelo->insertar($data["nombre"], $data["email"])) {
            // Marca el código de estado Http que se enviará al cliente
            http_response_code(201);
            // Cuerpo del mensaje que se envía.
            return ["mensaje" => "Empleado creado correctamente"];
        }

        // Marca el código de estado Http que se enviará al cliente
        http_response_code(500);
        // Cuerpo del mensaje que se envía.
        return ["error" => "No se pudo insertar el empleado"];
    }
}