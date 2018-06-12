<?php
use Migrations\AbstractSeed;

/**
 * Questions seed.
 */
class QuestionsSeed extends AbstractSeed
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
            ['title' => 'Qual a semelhança essencial entre o Cristianismo e o Islamismo?'],
            ['title' => 'O Estado laico é?'],
            ['title' => 'Sobre o Umbanda?'],
            ['title' => 'Quem prega a violência?'],
            ['title' => 'Qual a relação entre religião e espiritualidade?'],
            ['title' => 'Quais povos se conflitam na região de Jerusalém?'],
            ['title' => 'Quais as 2 religiões predominantes no Brasil?'],
            ['title' => 'Qual a segunda religião mais praticada no mundo?'],
            ['title' => 'Qual o principal motivo para a migração dos judaicos para a Palestina?'],
            ['title' => 'Quantas pessoas Hitler matou?']
        ];

        $table = $this->table('questions');
        $table->insert($data)->save();
    }
}
