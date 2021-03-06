<?php

use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
            DB::table('features')->insert([
                'name' => $faker->name,
                'icon' => 'help',
            ]);
        }
    }
}
