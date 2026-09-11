<?php

require_once "database.php";

$id = $_GET["id"];

$stmt = $conn->prepare("DELETE FROM users WHERE userid = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$stmt->close();

header("Location: index.php");
exit;