<main class="content">
    <?php
    renderTitle(
        'Cadastro de Usuário',
        'Crie e atualize os usuários',
        'icofont-user'
    );

    include(TEMPLATE_PATH . "/messages.php");
    ?>

    <form action="#" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" placeholder="Informe o nome" class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>" />
                <div class="invalid-feedback">
                    <?= $errors['name'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" placeholder="Informe o e-mail" class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" />
                <div class="invalid-feedback">
                    <?= $errors['email'] ?>
                </div>
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Confirme a senha" class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>" />
                <div class="invalid-feedback">
                    <?= $errors['password'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="confirm_password">Confirmação de Senha</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirme a senha" class="form-control <?= $errors['confirm_password'] ? 'is-invalid' : '' ?>" />
                <div class="invalid-feedback">
                    <?= $errors['confirm_password'] ?>
                </div>
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="start_date">Data de Admissão</label>
                <input type="date" id="start_date" name="start_date" placeholder="Informe a data de admissão" class="form-control <?= $errors['start_date'] ? 'is-invalid' : '' ?>" />
                <div class="invalid-feedback">
                    <?= $errors['start_date'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="end_date">Data de Desligamento</label>
                <input type="date" id="end_date" name="end_date" placeholder="Informe a data de desligamento" class="form-control <?= $errors['end_date'] ? 'is-invalid' : '' ?>" />
                <div class="invalid-feedback">
                    <?= $errors['end_date'] ?>
                </div>
            </div>

        </div>
    </form>
</main>