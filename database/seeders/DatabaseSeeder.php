<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'level' => 1,
        ]);
        User::factory()->create([
            'name' => 'aser',
            'email' => 'user@gmail.com',
            'level' => 0
        ]);
        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'level' => 0
        ]);

        return $this->call([
            ArticleSeeder::class
        ]);
    }
}
