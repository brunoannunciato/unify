<?= $this->element('Custom/header') ?>

<div class="container">

    <section class="greeting">
        <h1 class="title">
            Olá, <?='Bruno'?>!
        </h1>
    </section>
    <section class="school-rank">
        <h2 class="section-title">
            Melhores Escolas
        </h2>

        <div class="school">
            <div class="school-logo-wrapper">
                <img src="<?='/dist/img/escola-logo.jpg'?>" alt="Logo da escola">
            </div>
            <div class="datas">
                <p class="text-white school-name">
                    <?='Colégio Módulo'?>
                </p>
                <p class="text-white text-thin school-points">
                    <?='1500'?>pts
                </p>
            </div>
            <p class="school-position text-white">
                #1
            </p>
        </div>
    </section>

    <section class="students-rank">
        <h2 class="section-title">
            Melhores Alunos
        </h2>
        <ol class="rank">
            <a href="/website/profile">
                <li class="student">
                    <p class="position">
                        1
                    </p>
                    <div class="stutend-img-wrapper">
                        <img src="<?='/dist/img/lorem-person.png'?>" alt="Foto do estudante">
                    </div>
                    <div class="datas">
                        <p class="name">
                            <?='Vinicius Felippe'?>
                        </p>
                        <p class="school">
                            <?='Instituto Bradesco'?>
                        </p>
                    </div>
                    <p class="points">
                        <?='850'?>pts
                    </p>
                </li>
            </a>
        </ol>
    </section>
    <section class="cta">
        <a href="/website/quiz" class="button">Participe do Quiz</a>
    </section>

</div>
