<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
        $hasher = new DefaultPasswordHasher();
        $data = [
            [
                'school_id' => rand(1, 3),
                'name'      => 'Administrator',
                'username'  => 'admin',
                'email'     => 'email@email',
                'password'  => $hasher->hash(123),
            ],
            [
                'school_id' => rand(1, 3),
                'name'      => 'Fulano Torres',
                'username'  => 'fulano',
                'email'     => 'email@email',
                'password'  => $hasher->hash(123),
            ],
            [
                'school_id' => rand(1, 3),
                'name'      => 'Beltrano da Silva',
                'username'  => 'beltrano',
                'email'     => 'email@email',
                'password'  => $hasher->hash(123),
            ]
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
