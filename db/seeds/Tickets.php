<?php

use Phinx\Seed\AbstractSeed;

class Tickets extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $components_table = $this->table('components');
        $component_id_max = $this->fetchRow('SELECT MAX(id) as max_id from components')['max_id'];

        $tickets_table = $this->table('tickets');

        for ($i = 0; $i < 100; $i++) {
            $tickets_table->insert([[
                "title" => $faker->text(64),
                "description" => $faker->text(256),
                "component_id" => $faker->numberBetween(1, $component_id_max)
            ]]);
        }
        $tickets_table->save();
    }
}
