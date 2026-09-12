<?php

require_once "../config/database.php";

$nome = $_POST["nome"] ?? "";
$senha = $_POST["password"] ?? "";
$admin = $_POST["isAdmin"] ?? "";

if ($nome === "" || $senha === "" || $admin === "") {
    header("Location: index.php");
    exit;
} else {
    $hash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users(nome, password, isAdmin) VALUES (?, ?, ?)");

    $stmt->bind_param("ssi", $nome, $hash, $admin);

    $stmt->execute();

    $stmt->close();

    header("Location: index.php");
    exit;
}
