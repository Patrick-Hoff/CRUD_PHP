<?php

$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$password = getenv("DB_PASSWORD");
$db = getenv("DB_NAME");

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}