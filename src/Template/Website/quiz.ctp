<div class="header-background"></div>

<div class="container">

    <form action="/website/result">
        <section class="quiz-container">
            <?php if (!empty($questions)): ?>
                <?php foreach ($questions as $key => $question): ?>
                    <div class="question">
                        <div class="question-header">
                            <p class="question-num text-white text-thin">
                                Questão <?= $key+1 ?> de 10
                            </p>
                            <p class="question-ask text-white">
                                <?= $question['title'] ?>
                            </p>
                            <div class="asks-container">
                                <?php foreach ($question['answers'] as $key_answer => $answer): ?>
                                    <div class="ask-button">
                                        <input name="answer[<?= $key+1 ?>]" id="<?= $key_answer+1 ?>" type="radio" class="ask-radio" data-correct="<?= $answer['correct']?>">
                                        <label for="<?= $key_answer+1 ?>">
                                            <?= $answer['description'] ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                                <div class="timer-wrapper">
                                    <figure class="clock-image">
                                        <img src="/dist/img/icons/ico-relogio.png" alt="Temporizador">
                                    </figure>
                                    <div class="timer-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>
        <div class="controllers">
            <button type="button" class="slick-jump inverse-button">Pular</button>
            <button type="button" class="slick-next button">Próxima</button>
            <input type="submit" value="Terminar" class="button hide send-button">
            <input type="hidden" name="correct-counter" id="points">
        </div>
    </form>

</div>

<?= $this->Html->script([
    'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
    'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
    '../dist/js/app.min.js'
])  ?>
