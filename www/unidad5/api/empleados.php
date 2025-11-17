<?php
header("Content-Type: application/json; charset=utf-8");

require_once __DIR__ . "/../config.php";
require_once __DIR__ . "/../database.php";
require_once __DIR__ . "/../modelo/empleados_modelo.php";
require_once __DIR__ . "/../controlador/empleados_controlador.php";

$db = Database::getConnection();
$modelo = new EmpleadosModelo($db);
$controlador = new EmpleadosControlador($modelo);

$metodo = $_SERVER["REQUEST_METHOD"];

switch ($metodo) {
    case "GET":
        // GET /empleados.php  → listar empleados
        echo json_encode($controlador->listar());
        break;

    case "POST":
        // POST /empleados.php → crear empleado
        $input = json_decode(file_get_contents("php://input"), true) ?? [];
        echo json_encode($controlador->crear($input));
        break;

    default:
        // Método no permitido
        http_response_code(405);
        echo json_encode(["error" => "Solo GET, POST"]);
        break;
}