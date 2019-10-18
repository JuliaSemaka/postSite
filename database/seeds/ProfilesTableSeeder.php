<?php

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ru_RU'); // create a French faker

        for ($i = 0; $i < 10; $i++) {
            Profile::create([
                'user_id' => mt_rand(1,10),
                'lastname' => $faker->lastName,
//                'birthdate' => $faker->date('Y-m-d'),
                'phone' => $faker->phoneNumber
            ]);
        }


    }
}
