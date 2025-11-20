<?php

require_once __DIR__ . '/../config.php';
require_once __DIR__ .'/../modelo/optionmodel.php'; 
require_once __DIR__ .'/../controlador/voto_controlador.php'; 

try {
    // 2. Conexión a la Base de Datos
    $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
    
    // 3. Preparamos las piezas (Modelo y Controlador)
    $modelo = new optionModel($pdo);
    $controlador = new VoteController($modelo);

    // 4. Ejecutamos el controlador y guardamos lo que devuelve en $data
    // Esto es clave: $data tendrá dentro ['opciones'] y ['total']
    $data = $controlador->ejecutar();


} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
}

require_once __DIR__ . '/../vista/vista_voto.php';

?>