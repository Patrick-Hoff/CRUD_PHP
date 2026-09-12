<?php

require_once "../config/database.php";

$id = $_POST["id"];

$stmt = $conn->prepare("DELETE FROM users WHERE userid = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$stmt->close();

header("Location: index.php");
exit;