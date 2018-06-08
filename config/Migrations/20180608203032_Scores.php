<?php
use Migrations\AbstractMigration;

class Scores extends AbstractMigration
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
        $table = $this->table('scores');
        $table->addColumn('user_id', 'integer')->addForeignKey('user_id', 'users', 'id');
        $table->addColumn('question_id', 'integer')->addForeignKey('question_id', 'questions', 'id');
        $table->addColumn('score', 'integer', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
    }
}
