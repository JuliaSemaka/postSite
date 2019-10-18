<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
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
            $pass = Str::random(10);
            User::create([
                'name' => $faker->firstNameMale,
                'email' => $faker->freeEmail,
                'password' => bcrypt($pass),
            ]);
            //            echo Str::random(10).'@gmail.com' . $pass . "\n";
        }

        User::create([
            'name' => 'Admin',
            'email' => 'Admin@mail.ru',
            'password' => bcrypt('123456'),
        ]);
    }
}
