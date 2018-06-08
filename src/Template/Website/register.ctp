<div class="container">
    <header>
        <img src="/dist/img/logo-min-colorido.png" alt="Unify" class="logo">
        <a href="/website/login">
            <img src="/dist/img/close-button.png" alt="Fechar" class="close-button">
        </a>
    </header>

    <?= $this->Flash->render() ?>

    <section class="welcome">
        <?= $this->Form->create($user, ['class' => 'register-form']) ?>
            <?php
            echo $this->Form->control('school_id', ['class' => 'text-field' , 'options' => $schools]);
            echo $this->Form->control('name', ['class' => 'text-field', 'label' => false, 'placeholder' => 'Name']);
            echo $this->Form->control('username', ['class' => 'text-field', 'label' => false, 'placeholder' => 'Username']);
            echo $this->Form->control('email', ['class' => 'text-field', 'label' => false, 'placeholder' => 'Email']);
            echo $this->Form->control('password', ['class' => 'text-field', 'label' => false, 'placeholder' => 'Password']);
            ?>
        <?= $this->Form->button(__('Submit'), ['class' => 'button register-button']) ?>
        <?= $this->Form->end() ?>
    </section>
</div>
