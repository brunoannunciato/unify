<header>
    <div class="container">
        <img src="/dist/img/logo-min-colorido.png" alt="Unify" class="logo">
        <a href="/website/logout" title="Sair" class="logout">
            Sair
        </a>
    </div>
</header>


<div class="container">

    <section class="greeting">
        <h1 class="title">
            Olá, <?= $auth['name'] ?>!
        </h1>
    </section>

    <section class="school-rank">
        <h2 class="section-title">
            Melhores Escolas
        </h2>
        <?php if (!empty($schools)): ?>
            <?php foreach ($schools as $key => $school): ?>
                <div class="school">
                    <div class="school-logo-wrapper">
                        <?php if ($school['image']): ?>
                            <img src="<?= $school['image'] ?>" alt="Foto do estudante">
                        <?php else: ?>
                            <img src="<?='/dist/img/escola-logo.jpg'?>" alt="Logo da escola">
                        <?php endif ?>
                    </div>
                    <div class="datas">
                        <p class="text-white school-name">
                            <?= $school['name'] ?>
                        </p>
                        <p class="text-white text-thin school-points">
                            <?= $school['score_total'] ?> pts
                        </p>
                    </div>
                    <p class="school-position text-white">
                        #<?= $key+1 ?>
                    </p>
                </div>
                <br>
            <?php endforeach ?>
        <?php endif ?>
    </section>

    <section class="students-rank">
        <h2 class="section-title">
            Melhores Alunos
        </h2>
        <ol class="rank">
            <?php foreach ($users as $key => $user): ?>
                <a href="/website/profile/<?= $user['id'] ?>">
                    <li class="student">
                        <p class="position">
                            <?= ++$key ?>
                        </p>
                        <div class="stutend-img-wrapper">
                            <img src="<?='/dist/img/lorem-person.png'?>" alt="Foto do estudante">
                        </div>
                        <div class="datas">
                            <p class="name">
                                <?= $user['name'] ?>
                            </p>
                            <p class="school">
                                <?= $user['school']['name'] ?>
                            </p>
                        </div>
                        <p class="points">
                            <?= $user['score'] ?> pts
                        </p>
                    </li>
                </a>
                <br>
            <?php endforeach ?>
            <a href="/website/profile/<?= $auth['id'] ?>">
                <li class="student">
                    <p class="position">
                        <?= ++$key ?>
                    </p>
                    <div class="stutend-img-wrapper">
                        <img src="<?='/dist/img/lorem-person.png'?>" alt="Foto do estudante">
                    </div>
                    <div class="datas">
                        <p class="name"><?= $auth['name'] ?></p>
                        <p class="school"><?= $auth['school']['name'] ?></p>
                    </div>
                    <p class="points">
                        <?= $auth['score'] ?> pts
                    </p>
                </li>
            </a>
        </ol>
    </section>

    <section class="cta">
        <a href="/website/quiz" class="button">Participe do Quiz</a>
    </section>

</div>
