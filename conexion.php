<?php
// conexion.php

try {
    // Conexión a la base de datos usando PDO
    $conn = new PDO("sqlsrv:server=tcp:parcialserver2.database.windows.net,1433;Database=parcial2", "admin2", "M9MT#t7&P944Z");
    
    // Configurar el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Manejo de errores
    echo "Error en la conexión: " . $e->getMessage();
    die();
}
?>