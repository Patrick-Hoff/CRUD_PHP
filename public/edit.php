<?php

require_once "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    $id = $_GET["id"];
    $name = $_POST["nome"];
    $senha = $_POST["password"];
    $admin = $_POST["isAdmin"];

    if ($senha !== "") {
        $hash = password_hash($senha, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("UPDATE users SET nome = ?, password = ?, isAdmin = ? WHERE userid = ?");
        $stmt->bind_param("ssii", $name, $hash, $admin, $id);
    } else {
        $stmt = $conn->prepare("UPDATE users SET nome = ?, isAdmin = ? WHERE userid = ?");
        $stmt->bind_param("sii", $name, $admin, $id);
    }

    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
    exit;
} else {
    $id = $_GET["id"] ?? null;

    $stmt = $conn->prepare("SELECT userid, nome AS name, isAdmin AS admin FROM users WHERE userid = ?");
    $stmt->bind_param("i", $id);

    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    $stmt->close();

    if (!$user) {
        echo "Usuário não encontrado.";
        exit;
    }

    $form_action = "edit.php?id=" . $id;
    $button_text = "Editar";

    include "index.php";
}
