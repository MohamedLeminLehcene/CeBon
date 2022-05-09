<?php

namespace Database\Seeders;

use App\Models\User;
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
        $faker = \Faker\Factory::create();

    for ($i=0; $i <10 ; $i++) {
    User::create(
        [
            'name' => $faker->Name(),
            'email' => $faker->unique()->safeEmail(),
            'password' => bcrypt('12341234')
        ]
    );
    }
    }
}
