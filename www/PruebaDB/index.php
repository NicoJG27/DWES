<?php
try {
    // 1️⃣ Conexión a la base de datos
    $conn = new PDO("mysql:host=db;dbname=dwes;charset=utf8", "root", "root");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 2️⃣ Sentencia SQL con parámetro
    $sql = "DELETE FROM tienda WHERE cod = :cod";

    // 3️⃣ Preparar la sentencia
    $stmt = $conn->prepare($sql);

    // 4️⃣ Vincular el parámetro
    $stmt->bindParam(':cod', $codigo);

    // 5️⃣ Asignar el valor a eliminar
    $codigo = 3; // Ejemplo: eliminar el registro con código 3

    // 6️⃣ Ejecutar la consulta
    $stmt->execute();

    // 7️⃣ Mostrar confirmación
    echo "✅ Registro con código $codigo eliminado correctamente.";

} catch (PDOException $e) {
    echo "❌ Error al eliminar: " . $e->getMessage();
}
?>