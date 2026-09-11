<?php

require_once "database.php";

$get_users = $conn->prepare("SELECT userid, nome AS name, isAdmin AS admin FROM users");

$get_users->execute();

$result = $get_users->get_result();

$data = $result->fetch_all(MYSQLI_ASSOC);

$get_users->close();

$form_action = $form_action ?? "create.php";
$button_text = $button_text ?? "Cadastrar";

var_dump($user);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Crud</title>
</head>

<body>
    <main>
        <?php include "form.php"; ?>
        <div class="list_users">
            <?php foreach ($data as $user) : ?>
                <ul>
                    <li>id: <?= $user["userid"] ?></li>
                    <li>Nome: <?= htmlspecialchars($user["name"]) ?></li>
                    <li>Senha: ...</li>
                    <li>Adm: <?= $user["admin"] == 1 ? "Sim" : "Não" ?></li>
                    <li>
                        <a href="delete.php?id=<?= $user["userid"] ?>">
                            <i class="material-icons" style="font-size:25px;color:red">delete</i>
                        </a>
                    </li>
                    <li>
                        <a href="edit.php?id=<?= $user["userid"] ?>">
                            <i class="material-icons" style="font-size:25px;color:yellow">edit</i>
                        </a>
                    </li>
                </ul>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>