<div class="header-background"></div>
<div class="container">

    <section class="result-container">
            <div class="result-header">
                <div class="header">
                    <a href="/website/dashboard" title="fechar">
                        <img src="/dist/img/close-button.png" alt="Fechar">
                    </a>
                </div>
                <div class="congratulations">
                    <h2 class="title text-white">
                        Parabéns!
                    </h2>
                    <p class="subtitme text-white">
                        Você finalizou o quiz.
                    </p>
                </div>
            </div>

            <div class="points-wrapper">
                <p class="points">
                    <?php if (!empty($auth['score'])): ?>
                        <?= $auth['score'] ?>
                    <?php endif; ?>
                </p>
                <div class="points-string">
                    Pontos
                </div>
            </div>

            <div class="trophies">
                <p class="section-title">
                    Troféus adquiridos:
                </p>

                <div class="shelf">

                    <div class="trophien">
                        <img src="<?='/dist/img/trofeus/icon-trofeu-02.png'?>" alt="Gabaritou o Quiz">
                        <p class="trophien-desc">Gabaritou o Quiz</p>
                    </div>

                    <div class="trophien">
                        <img src="<?='/dist/img/trofeus/icon-trofeu-03.png'?>" alt="10 acertos totais">
                        <p class="trophien-desc">10 acertos totais</p>
                    </div>

                </div>
            </div>
    </section>

</div>


<?= $this->Html->script([
    'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
    'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
    '../dist/js/app.min.js'
])  ?>
