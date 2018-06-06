<div class="container">
    <header>
        <img src="/dist/img/logo-min-colorido.png" alt="Unify" class="logo">
        <a href="/website/login">
            <img src="/dist/img/close-button.png" alt="Fechar" class="close-button">
        </a>
    </header>

    <?= $this->Flash->render() ?>

    <section class="welcome"><form action="cadastro.php" class="register-form">
            <input type="text"  placeholder="Nome completo" name="nome" class="text-field">
            <select placeholder="Escola" name="escola" class="text-field">
                <option value="Escola" disabled selected>Escola</option>
                <option value="Colégio Módulo">Colégio Módulo</option>
            </select>
            <input type="text" placeholder="Usuário" name="usuario" class="text-field">
            <input type="text" placeholder="E-mail" name="email" class="text-field">
            <input type="password" placeholder="Senha" name="senha" class="text-field">
            <input type="submit" class="button register-button" value="Cadastrar">
        </form>
    </section>
</div>
