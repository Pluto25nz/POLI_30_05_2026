<?php
$host     = 'mysql';
$user     = 'root';
$password = 'root';
$database = 'asena_actas';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
   die('Error de conexión: ' . $conn->connect_error);
}