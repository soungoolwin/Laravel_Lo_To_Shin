<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
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
        Article::truncate();
        Category::truncate();
        Comment::truncate();


        Article::factory(20)->create();
        Category::factory(5)->create();
        Comment::factory(40)->create();

        User::factory()->create([
            "name"=>"Alice",
            "email"=>"alice@gmail.com",
        ]);
        User::factory()->create([
            "name"=>"Bob",
            "email"=>"bob@gmail.com",
        ]);
    }
}
