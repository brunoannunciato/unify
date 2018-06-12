<?php
use Migrations\AbstractMigration;

class Answers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('answers', ['collation' => 'utf8_general_ci']);
        $table->addColumn('question_id', 'integer')->addForeignKey('question_id', 'questions', 'id');
        $table->addColumn('description', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('correct', 'boolean', [
            'default' => null,
            'limit' => 1,
            'null' => false,
        ]);
        $table->create();
    }
}
