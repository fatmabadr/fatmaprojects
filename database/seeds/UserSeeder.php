<?php

use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 20; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => Str::random(10).'@gmail.com',
                'mobile' => Str::random(10).'@gmail.com',
                'type' => 'admin',
                'password' => Hash::make('password'),
            ]);
        }
    }
}
