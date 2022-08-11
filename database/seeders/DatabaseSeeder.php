<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
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
        \App\Models\User::factory(3)->create();
        Post::factory(30)->create();
        \App\Models\Category::factory(5)->create();
        
        $posts = \App\Models\Post::get();

        foreach ($posts as $post){
          $post->categories()->attach(Category::get()->random()->id);
        }
    }
}
