<?= $this->element('Custom/header') ?>

<div class="container">

    <section class="greeting">
        <h1 class="title">
            Olá, <?= $user['name'] ?>!
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
                            <?= 0 ?> pts
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
            <a href="/website/profile">
                <li class="student">
                    <p class="position">
                        <?= ++$key ?>
                    </p>
                    <div class="stutend-img-wrapper">
                        <?php if ($user['image']): ?>
                            <img src="<?= $user['image'] ?>" alt="Foto do estudante">
                        <?php else: ?>
                            <img src="<?='/dist/img/lorem-person.png'?>" alt="Foto do estudante">
                        <?php endif ?>
                    </div>
                    <div class="datas">
                        <p class="name">
                            <?= $user['name'] ?>
                        </p>
                        <p class="school">
                            <?= 'school name' ?>
                        </p>
                    </div>
                    <p class="points">
                        <?= 0 ?> pts
                    </p>
                </li>
            </a>
            <br>
            <?php endforeach ?>
        </ol>
    </section>

    <section class="cta">
        <a href="/website/quiz" class="button">Participe do Quiz</a>
    </section>

</div>
