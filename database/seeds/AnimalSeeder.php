<?php

use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            [
                'name' => 'Flipper',
                'age' => '12',
                'description' => 'un grand dauphin apprivoisé par Bud',
                'gender' => 'male',
                'weight' => '200',
                'specie_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Skippy',
                'age' => '9',
                'description' => 'Skippy intervient toujours à bon escient pour sauver Sonny des pièges',
                'gender' => 'male',
                'weight' => '60',
                'specie_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Lassy',
                'age' => '7',
                'description' => 'Possède une étoile sur le Walk of Fame à Hollywood',
                'gender' => 'female',
                'weight' => '40',
                'specie_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
