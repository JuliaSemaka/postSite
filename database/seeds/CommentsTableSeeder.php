<?php

use App\Models\Comment;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ru_RU');

        for ($i = 0; $i < 10; $i++) {
            Comment::create([
                'post_id' => mt_rand(1,10),
                'title' => $faker->realText(20),
                'text' => $faker->realText(600)
            ]);
        }

    }
}
