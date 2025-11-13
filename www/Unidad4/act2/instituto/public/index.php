<?php

require_once '../config.php';
require_once '../modelo/curso_modelo.php';
require_once '../modelo/estudiante_modelo.php';
require_once '../controlador/instituto_controlador.php';


try {
    $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión a la base de datos: " . $e->getMessage();
    exit;
}


$modeloCurso = new CursoModelo($pdo);
$modeloEstudiante = new EstudianteModelo($pdo);


$controlador = new InstitutoControlador($modeloCurso, $modeloEstudiante);


$data = $controlador->ejecutar();


require_once '../vista/vista_instituto.php';

?>