<?php
use Migrations\AbstractMigration;

class TrophiesUsers extends AbstractMigration
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
        $table = $this->table('trophies_users');
        $table->addColumn('user_id', 'integer')->addForeignKey('user_id', 'users', 'id');
        $table->addColumn('trophy_id', 'integer')->addForeignKey('trophy_id', 'trophies', 'id');
        $table->create();
    }
}
