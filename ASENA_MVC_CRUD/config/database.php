<?php
$conn = new mysqli("mysql", "root", "root", "asena_actas", 3306);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>