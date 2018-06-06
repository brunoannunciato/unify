<?= $this->element('Custom/header') ?>

<div class="container">

    <section class="welcome">
        <div class="greetings">
            <h1 class="title">
                Bem-vindo!
            </h1>
            <p class="subtitle">
                Faça o login para continuar.
            </p>
        </div>
        <form action="login.php" class="login-form">
            <input type="text" placeholder="Usuário" class="text-field">
            <input type="password" placeholder="Senha" class="text-field">
            <input type="submit" class="button login-button" value="ENTRAR">
        </form>

        <div class="functions">
            <a href="#" class="text-orange text-bold">Esqueceu sua senha?</a> <br>
            <p class="text-grey">Ainda não tem uma conta?</p> <a href="/website/register" class="text-bold text-orange">Crie uma.</a>
        </div>
    </section>

</div>
