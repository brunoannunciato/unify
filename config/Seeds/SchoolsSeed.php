<?php
use Migrations\AbstractSeed;

/**
 * Schools seed.
 */
class SchoolsSeed extends AbstractSeed
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
            [
                'name'        => 'School 1',
                'responsable' => 'Fulano',
                'image'       => null
            ],
            [
                'name'        => 'School 2',
                'responsable' => 'Beltrano',
                'image'       => null
            ],
            [
                'name'        => 'School 3',
                'responsable' => 'Beltrano',
                'image'       => null
            ]
        ];

        $table = $this->table('schools');
        $table->insert($data)->save();
    }
}
