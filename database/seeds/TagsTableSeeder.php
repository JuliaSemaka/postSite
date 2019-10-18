<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Работа',
            'Жизнь',
            'Разработка',
            'Дом',
            'Природа'
        ];
        for ($i=0; $i<count($tags); $i++){
            Tag::create([
                'title' => $tags[$i]
            ]);
        }
    }
}
