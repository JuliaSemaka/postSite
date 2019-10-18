<?php

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $section = [
            'Общее',
            'Жизнь',
            'Квесты',
            'Работа',
            'Путешествия'
        ];
        for ($i=0; $i<count($section); $i++){
            Section::create([
                'title' => $section[$i]
            ]);
        }
    }
}
