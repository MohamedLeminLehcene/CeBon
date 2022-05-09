<?php

namespace Database\Seeders;

use App\Models\Tweet;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $user = User::all();

        foreach ($user as $user) {
            Tweet::create(
                [
                    'content' => $faker->paragraph(),
                    'user_id' => $user->id,
                    'deleted_at' => Carbon::now(),
                ]
            );
        }







    }
}
