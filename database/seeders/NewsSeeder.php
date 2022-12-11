<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(
            function (User $user)
            {
                $news = News::factory(5)->create(['user_id' => $user->id]);
                $user->news()->saveMany($news);
            }
        );
    }
}
