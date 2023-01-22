<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Мыши',
            'Клавиатуры',
            'Наушники',
            'Поверхности',
            'Мониторы',
            'Геймпады',
            'Консоли',
            'Акустика',
            'Аксесуары',
            'Распродажа',
        ];
        $categories = [];

        foreach ($names as $key => $name) {
            $categories[] = [
                'name' => $name,
                'slug' => Str::slug($name),
                'parent_id' => 0,
            ];
        }

        DB::table('categories')->insert($categories);
    }
}
