<?php
// Conexió a la base de dades
$conexion = new mysqli("sql211.infinityfree.com", "if0_35986563", "hfuwhn6583ue", "if0_35986563_institut");

// Verificar la conexió
if ($conexion->connect_error) {
    die("Error de conexió: " . $conexion->connect_error);
}

// Rebre dades del formulari
$nombre = $_POST['nombre'];

// Insertar dades en la taula d'estudiants
$sql = "INSERT INTO estudiantes (nombre) VALUES ('$nombre')";

if ($conexion->query($sql) === TRUE) {
    echo "Estudiant afegit correctament <meta http-equiv='refresh' content='3; URL=http://pe000pe000pe.000.pe/p5/registre_estudiants.php' />";
} else {
    echo "Error afegint l'estudiant: " . $conexion->error;
}

// Tancar la connexió
$conexion->close();
?>
