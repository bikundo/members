<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectors = ['government body', 'development partner', 'NGO', 'private sector'];
        $faker = Faker\Factory::create();
        DB::table('users')->insert([
            'name'     => str_random(10),
            'role'     => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);
        foreach ($sectors as $sector) {
            DB::table('sectors')->insert([
                'name'        => $sector,
                'description' => $faker->sentence($nbWords = 30),
            ]);
        }
    }
}
