<?php
// Conexió a la base de dades
$conexion = new mysqli("sql211.infinityfree.com", "if0_35986563", "hfuwhn6583ue", "if0_35986563_institut");

// Verificar la conexió
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta per obtenir la llista d'estudiants
$sql = "SELECT * FROM estudiantes";
$resultado = $conexion->query($sql);

// Mostrar la lista d'estudiants
if ($resultado->num_rows > 0) {
    echo "<ul>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<li>Nombre: {$fila['nombre']}  Apellido: {$fila['apellido']}  Edad:{$fila['edad']}  Id_curso: {$fila['id_curso']}</li>"; 
        
        // Mostrar més campos segons sigui necessari
    }
    echo "</ul>";
} else {
    echo "No hi ha estudiants registrats";
}

// Tancar la connexió
$conexion->close();
?>

