<?php
// insertar.php

function insertarDatos($nombre, $telefono, $correo, $conn) {
    try {
        // Prepara la consulta SQL para la inserción
        $sql = "INSERT INTO tu_tabla (nombre, telefono, correo) VALUES (:nombre, :telefono, :correo)";
        $stmt = $conn->prepare($sql);
        
        // Vincula los parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':correo', $correo);
        
        // Ejecuta la consulta
        $stmt->execute();
        
        echo "Datos almacenados correctamente.";
    } catch (PDOException $e) {
        echo "Error al almacenar datos: " . $e->getMessage();
    }
}
?>