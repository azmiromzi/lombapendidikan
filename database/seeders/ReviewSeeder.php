<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
            'review' => 'Website ini sangat bagus memeberikan banyak materi bagus',
            'user_id' => mt_rand(1,10)
        ]);
        Review::create([
            'review' => 'Website ini sangat bagus memeberikan banyak materi bagus',
            'user_id' => mt_rand(1,3)

        ]);
        Review::create([
            'review' => 'Website ini sangat bagus memeberikan banyak materi bagus',
            'user_id' => mt_rand(1,3)

        ]);

    }
}
