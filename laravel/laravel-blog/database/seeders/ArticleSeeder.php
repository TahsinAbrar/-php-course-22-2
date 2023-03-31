<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($count = 0; $count < 10; $count++) {
            DB::table('articles')->insert([
                'title' => fake()->sentence(8),
                'slug' => fake()->slug(),
                'description' => fake()->text(),
                'author_name' => fake()->name(),
            ]);
        }
    }
}
