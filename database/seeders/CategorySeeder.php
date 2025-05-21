<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Anime', 'slug' => 'anime', 'description' => 'Ulasan dan berita tentang anime terbaru dari Jepang'],
            ['name' => 'Manhwa', 'slug' => 'manhwa', 'description' => 'Rekomendasi dan review manhwa Korea terpopuler'],
            ['name' => 'Teknologi', 'slug' => 'teknologi', 'description' => 'Berita dan artikel seputar perkembangan teknologi terkini'],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => $category['slug'],
                'description' => $category['description'],
                'count' => 0,   
            ]);
        }
    }
}
