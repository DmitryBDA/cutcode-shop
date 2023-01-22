<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'name' => 'Главная',
                'url' => '/',
                'position' => 1
            ],
            [
                'name' => 'Каталог товаров',
                'url' => '/catalog',
                'position' => 2
            ],
        ];

        DB::table('menus')->insert($menus);
    }
}
