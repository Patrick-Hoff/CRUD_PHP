<?php


?>

<div class="form_crud">
    <form action="<?= $form_action ?>" method="post">
        <div id="form_name">
            <label for="nome">Nome</label>
            <input
                type="text"
                placeholder="Nome"
                id="nome" name="nome"
                required
                value="<?= $user["name"] ?? "" ?>">
        </div>
        <div id="form_password">
            <label for="password">Senha</label>
            <input
                type="password"
                placeholder="<?= $user === "root"
                                    ? "Senha"
                                    : "Deixe em branco para manter a senha atual" ?>"
                id="password"
                name="password"
                <?= $user === "root" ? "required" : "" ?>>

        </div>
        <div id="form_adm">
            Administrador
            <label>
                <input
                    type="radio"
                    name="isAdmin"
                    value="1"
                    required
                    <?= ($user["admin"] ?? null) == 1 ? "checked" : "" ?>>
                Sim
            </label>

            <label>
                <input
                    type="radio"
                    name="isAdmin"
                    value="0"
                    required
                    <?= ($user["admin"] ?? null) == 0 ? "checked" : "" ?>>
                Não
            </label>
        </div>
        <div>
            <input type="submit" value="<?= $button_text ?>">
        </div>
    </form>
</div>