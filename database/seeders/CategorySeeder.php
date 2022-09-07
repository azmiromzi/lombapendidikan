<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::factory()->count(5)->create();
        Category::create([
            'name' => 'Laravel'
        ]);
        Category::create([
            'name' => 'PHP'
        ]);
        Category::create([
            'name' => 'HTML'
        ]);
        Category::create([
            'name' => 'CSS'
        ]);
    }
}
