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

        <?= $this->Flash->render() ?>

        <?= $this->Form->create('', ['class' => 'login-form']) ?>
            <?php
            echo $this->Form->control('username', ['class' => 'text-field', 'label' => false, 'placeholder' => 'Username']);
            echo $this->Form->control('password', ['class' => 'text-field', 'label' => false, 'placeholder' => 'Password']);
            ?>
        <?= $this->Form->button(__('Submit'), ['class' => 'button login-button']) ?>
        <?= $this->Form->end() ?>

        <div class="functions">
            <a href="#" class="text-orange text-bold">Esqueceu sua senha?</a> <br>
            <p class="text-grey">Ainda não tem uma conta?</p> <a href="/website/register" class="text-bold text-orange">Crie uma.</a>
        </div>
    </section>

</div>
