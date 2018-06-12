<?php
use Migrations\AbstractSeed;

/**
 * Answers seed.
 */
class AnswersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['question_id' => 1, 'description' => 'Ambos acreditam no mesmo Deus', 'correct' => '0'],
            ['question_id' => 1, 'description' => 'Originados do antigo testamento', 'correct' => '1'],
            ['question_id' => 1, 'description' => 'Nas duas culturas Jesus é filho de Deus', 'correct' => '0'],
            ['question_id' => 1, 'description' => 'Ambos seguem a Bíblia', 'correct' => '0'],

            ['question_id' => 2, 'description' => 'Neutro no campo religioso', 'correct' => '1'],
            ['question_id' => 2, 'description' => 'Sem religião presente', 'correct' => '0'],
            ['question_id' => 2, 'description' => 'Sem religiosos na política', 'correct' => '0'],
            ['question_id' => 2, 'description' => 'Contra qualquer tipo de religião', 'correct' => '0'],

            ['question_id' => 3, 'description' => 'É uma religião pagã', 'correct' => '0'],
            ['question_id' => 3, 'description' => 'Macumbas são feitas para prejudicar', 'correct' => '0'],
            ['question_id' => 3, 'description' => 'Exclusivo para a cultura africana', 'correct' => '0'],
            ['question_id' => 3, 'description' => 'É uma mistura de várias religiões', 'correct' => '1'],

            ['question_id' => 4, 'description' => 'Cristãos', 'correct' => '0'],
            ['question_id' => 4, 'description' => 'Muçulmanos', 'correct' => '0'],
            ['question_id' => 4, 'description' => 'Satanistas', 'correct' => '0'],
            ['question_id' => 4, 'description' => 'Nenhuma das anteriores', 'correct' => '1'],

            ['question_id' => 5, 'description' => 'O conjunto de regras e rituais', 'correct' => '0'],
            ['question_id' => 5, 'description' => 'A alma', 'correct' => '1'],
            ['question_id' => 5, 'description' => 'As doutrinas', 'correct' => '0'],
            ['question_id' => 5, 'description' => 'A fé', 'correct' => '0'],

            ['question_id' => 6, 'description' => 'Árabes e israelenses', 'correct' => '1'],
            ['question_id' => 6, 'description' => 'Muçulmanos e cristãos', 'correct' => '0'],
            ['question_id' => 6, 'description' => 'Israelenses e católicos', 'correct' => '0'],
            ['question_id' => 6, 'description' => 'Muçulmanos e árabes', 'correct' => '0'],

            ['question_id' => 7, 'description' => 'Católica e Evangélica', 'correct' => '1'],
            ['question_id' => 7, 'description' => 'Católica e Espírita', 'correct' => '0'],
            ['question_id' => 7, 'description' => 'Católica e Umbanda', 'correct' => '0'],
            ['question_id' => 7, 'description' => 'Evangélica e Espírita', 'correct' => '0'],

            ['question_id' => 8, 'description' => 'Cristianismo', 'correct' => '0'],
            ['question_id' => 8, 'description' => 'Islamismo', 'correct' => '1'],
            ['question_id' => 8, 'description' => 'Muçulmanos', 'correct' => '0'],
            ['question_id' => 8, 'description' => 'Judaísmo', 'correct' => '0'],

            ['question_id' => 9, 'description' => 'A primeira guerra mundial', 'correct' => '0'],
            ['question_id' => 9, 'description' => 'A inquisição', 'correct' => '0'],
            ['question_id' => 9, 'description' => 'A fome no Oriente Médio', 'correct' => '1'],
            ['question_id' => 9, 'description' => 'A ascensão do nazismo', 'correct' => '0'],

            ['question_id' => 10, 'description' => 'Espírita', 'correct' => '0'],
            ['question_id' => 10, 'description' => 'Afro-brasileira', 'correct' => '1'],
            ['question_id' => 10, 'description' => 'Evangélica', 'correct' => '0'],
            ['question_id' => 10, 'description' => 'Católica', 'correct' => '0']
        ];

        $table = $this->table('answers');
        $table->insert($data)->save();
    }
}
