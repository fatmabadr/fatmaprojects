<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 80; $i++) {
            DB::table('units')->insert([
                'type' =>  $faker->randomElement(['Flat', 'land','Villa','Garden']),
                'city_id' =>  $faker->randomElement(['1', '2','3','4','5','6','7']),
                'title' => $faker->name ,
                'user_id' => $faker->randomElement(['1', '2','3','4','5','6','7']),
                'price' => $faker->randomDigit,
                'area' => $faker->randomDigit,
                'noOfRooms' => $faker->randomElement(['1', '2','3','4']),
                'detail' => $faker->realText(200, 1),
                'status' => $faker->randomElement(['For rent','For sale']),
            ]);
        }
    }
}
